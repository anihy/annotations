<?php

declare(strict_types=1);

namespace Doctrine\Annotations\Type\Constant;

use Doctrine\Annotations\Type\ConstantScalarType;
use Doctrine\Annotations\Type\IntegerType;

/**
 * @internal
 */
final class ConstantIntegerType extends IntegerType implements ConstantScalarType
{
    /** @var int */
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function describe() : string
    {
        return (string) $this->value;
    }

    /**
     * @param mixed $value
     */
    public function validate($value) : bool
    {
        return $value === $this->value;
    }
}
