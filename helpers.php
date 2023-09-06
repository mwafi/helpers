<?php

/**
 * This function drops an element from an array by index
 * without modifying the original array
 * @param array $array
 * @param mixed $key
 * @return array
 */
function dropElementFromArrayByKeyWithoutReference(array $array, mixed $key): array
{
    return array_filter($array, fn($item, $i) => !!! ($i === $key), ARRAY_FILTER_USE_BOTH);
}

