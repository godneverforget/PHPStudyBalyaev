<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 17</title>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a></p>";

    class Tag
    {
        private $name;
        private $attributes = [];
        private $content;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function addAttribute($attribute, $value)
        {
            $this->attributes[$attribute] = $value;
        }

        public function addContent($content)
        {
            $this->content = $content;
        }

        public function render()
        {
            $output = "<$this->name";

            foreach ($this->attributes as $attribute => $value) {
                $output .= " $attribute=\"$value\"";
            }

            $output .= ($this->content !== '') ? ">$this->content</$this->name>" : '/>';

            echo $output;
        }
    }

    $divTag = new Tag('div');
    $divTag->addContent('text');
    $divTag->render();

    $imgTag = new Tag('img');
    $imgTag->addAttribute('src', 'https://ru-static.z-dn.net/files/d66/d876b023f17b7648c2e1d3c521c6621a.png');
    $imgTag->addAttribute('width', '660');
    $imgTag->addAttribute('height', '440');
    $imgTag->render();

    $headerTag = new Tag('header');
    $headerTag->addContent('header сайта');
    $headerTag->render();

    ?>
</body>

</html>