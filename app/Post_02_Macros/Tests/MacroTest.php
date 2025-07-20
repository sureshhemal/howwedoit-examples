<?php

uses(Tests\TestCase::class);

it('can compare two collections for equality', function () {
    $collection1 = collect(['a' => 1, 'b' => 2, 'c' => 3]);
    $collection2 = collect(['a' => 1, 'c' => 3, 'b' => 2]);
    $collection3 = collect(['a' => 1, 'b' => 2]);

    // Test that two identical collections are equal
    expect($collection1->equals($collection2))->toBeTrue();

    // Test that collections with different keys or values are not equal
    expect($collection1->equals($collection3))->toBeFalse();
});
