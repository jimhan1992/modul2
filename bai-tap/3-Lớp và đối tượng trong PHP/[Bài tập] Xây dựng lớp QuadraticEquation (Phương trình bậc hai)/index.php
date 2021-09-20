<!--
    QuadraticEquation
    ------------------
    - $a: int
    - $b: int
    - $c: int
    ------------------
    + getNumberA(): float
    + getNumberB(): float
    + getNumberC(): float
    + getDiscriminant(): float
    + getRoot1(): float
    + getRoot2(): float
-->

<?php
include 'QuadraticEquation.php';
$case3 = new QuadraticEquation(1.0, 3, 1);
echo 'Case 1: a=' . $case3->getA() . ', b=' . $case3->getB() . ', c=' . $case3->getC();
echo '<br>';
if ($case3->getDiscriminant() > 0) {
    echo 'The equation has two roots ' . $case3->getRoot1() . ' and ' . $case3->getRoot2();
} else if ($case3->getDiscriminant() == 0) {
    echo 'The equation has one root ' . $case3->getRoot1();
} else {
    echo 'The equation has no real roots.';
}

echo '<br>';

$case3 = new QuadraticEquation(1, 2.0, 1);
echo 'Case 2: a=' . $case3->getA() . ', b=' . $case3->getB() . ', c=' . $case3->getC();
echo '<br>';
if ($case3->getDiscriminant() > 0) {
    echo 'The equation has two roots ' . $case3->getRoot1() . ' and ' . $case3->getRoot2();
} else if ($case3->getDiscriminant() == 0) {
    echo 'The equation has one root ' . $case3->getRoot1();
} else {
    echo 'The equation has no real roots.';
}

echo '<br>';

$case3 = new QuadraticEquation(1, 2, 3);
echo 'Case 3: a=' . $case3->getA() . ', b=' . $case3->getB() . ', c=' . $case3->getC();
echo '<br>';
if ($case3->getDiscriminant() > 0) {
    echo 'The equation has two roots ' . $case3->getRoot1() . ' and ' . $case3->getRoot2();
} else if ($case3->getDiscriminant() == 0) {
    echo 'The equation has one root ' . $case3->getRoot1();
} else {
    echo 'The equation has no real roots.';
}