<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array of Objects</title>
</head>
<body>
    <?php 

    class computer_component {
        public $component;
        public $brand;
        public function __construct($component, $brand) {
            $this ->component = $component;
            $this ->brand = $brand;
        }

        public function desc() {
            echo "The product is {$this ->component} by {$this ->brand}.";
        }

    }

    // RTX 3080 inherit from computer component
    class RTX3080 extends computer_component {
        public function notice() {
            echo "What is this?";
        }
    }

    $RTX3080 = new RTX3080("RTX 3080", "AORUS");
    $RTX3080->notice();
    $RTX3080->desc();

    ?>
</body>
</html>