<?php



function case4($text)
{

    if (isset($text) && !empty($text)) {


        $pattern = '/\bкто[ ]+то\b|\bгде[ ]+то\b|\bто[ ]+то\b|\bвот[ ]+вот\b|\bиз[ ]+за\b|\bиз[ ]+под\b|[а-я]+[ ]+ка\b|[а-я]+[ ]+де\b|[а-я]+[ ]+кась\b/ui';
        // Находим все вхождения нужных нам слов и заменяем все пробелы между словами на единичный -
        $processedText = preg_replace_callback($pattern, function ($matches) {
            return preg_replace('/[ ]+/', '-', $matches[0]);
        }, $text);



        echo $processedText;

    } else {
        echo "Empty";
    }
}

function case10($text)
{
    if (isset($text) && !empty($text)) {
        // Удаляем лишние пробелы между дефисов
        $sentences = preg_split('/([.?!]+[ \n\s<]+)/ui',$text,-1,PREG_SPLIT_DELIM_CAPTURE);
        $longestSentence ="";
        $maxLength=0;
        $tempSentence='';
        $newtext='';

        $longestid =0;
        foreach($sentences as $id => $sentence)
        {
            $tempSentence = strip_tags($sentence);
            $length = strlen($tempSentence);
            if ($length>$maxLength and  preg_match('/^[a-zа-яё0-9]+/iu', $sentence)){
                $maxLength = $length;
                $longestSentence = $tempSentence;
                $longestid = $id;

            }
        }

        foreach ($sentences as $id => $sentence)
        {
            if ($id == $longestid) {
                $newtext .= '<a id="longestsentence"></a>';
            }
           $newtext.=$sentence;
        }

        $longestSentence = mb_strimwidth($longestSentence,0,80,'');

        $words = preg_split('/[ ]+/ui',$longestSentence);
        $resultsentence='';
        foreach($words as $id => $word)
        {
            if ($id < count($words)-2)
            {
                $resultsentence.=$word;

            }
            else
            {
                $resultsentence.= '<a href="#longestsentence">' .$word.' '.$words[$id+1]. '…'. '</a>';
                break;
            }
            $resultsentence.=' ';
        }



        echo $resultsentence . "<br>";
        echo $newtext;

    } else {
        echo "Empty";
    }
}

function case14($text)
{
    if (isset($text) && !empty($text)) {
        // Находим все html-теги в тексте
        preg_match_all('/<([a-z][a-z0-9]*)\b[^>]*>(.*?)<\/\1>/i', $text, $matches, PREG_SET_ORDER);

        // Создаем список якорных ссылок
        $anchorLinks = [];

        foreach ($matches as $key => $match) {
            $tag = $match[1];
            $id = 'tag' . $key; // создаем уникальный id для каждого тега
            $anchorLink = '<a href="#' . $id . '">“содержимое тега &lt;' . $tag . '&gt;”</a><br/>';
            $anchorLinks[] = $id;
            echo "Ссылка ". $key+1 . ' '. $anchorLink;

        }

        return $anchorLinks;

    } else {
        return "Empty";
    }
}

function insertAnchorLinks($text, $anchorLinks)
{
    if (isset($text) && !empty($text) && isset($anchorLinks) && !empty($anchorLinks)) {

        foreach ($anchorLinks as $anchorLink) {
            $anchorLink = 0;
            $newText = preg_replace_callback('/<([a-z][a-z0-9]*)\b[^>]*>(.*?)<\/\1>/i', function ($match) use (&$anchorLink) {
                $id = 'tag' . $anchorLink;
                $anchorLink++;
                return '<a id="' . $id . '"></a>' . $match[0];
            }, $text);

        }
        return $newText;

    } else {
        return "Empty";
    }
}

function case16($text)
{
    if (isset($text) && !empty($text)) {

        $banwords = array(
            'пух',
            'рот',
            'делать',
            'ехать',
            'около',
            'для'
        );
        $pattern = '/';
        foreach($banwords as $word)
        {
            $pattern.= '\b'.$word .'|';
        }
        $pattern=rtrim($pattern,'|');
        $pattern.='/ui';
        $text = preg_replace_callback($pattern, function ($matches) {
            $helpstring='';
            for ($i = 0;$i < strlen($matches[0])/2;$i++ )
            {
                $helpstring.='#';
            }
            return str_replace($matches[0], $helpstring, $matches[0]);
        }, $text);

        return $text;
    } else {
        return "Empty";
    }
}