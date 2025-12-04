<?php
header('Content-Type: text/plain; charset=utf-8');

if (isset($_POST['expression'])) {
    $expression = $_POST['expression'];

    // Keep only digits, operators, parentheses, decimal point and spaces
    $expression = preg_replace('/[^0-9+\-*\/*(). ]/', '', $expression);
    // The above pattern keeps: 0-9, +, -, *, /, (, ), ., and spaces.
    // Evaluate safely — catch any errors
    try {
        // Evaluate expression
        $result = eval('return ' . $expression . ';');
        // If eval returns null or false while expression non-empty, handle it
        if ($result === null && trim($expression) !== '') {
            echo "Error: Invalid expression.";
        } else {
            echo $result;
        }
    } catch (Throwable $e) {
        echo "Error: Invalid expression.";
    }
}
?>