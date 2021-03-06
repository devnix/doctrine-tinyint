<?php

namespace Devnix\Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class TinyintType extends Type 
{
    const TINYINT = 'mysql_tinyint';

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $fieldDeclaration = array_merge([
            'length' => 1,
        ], $fieldDeclaration);

        $sqlDeclaration =  sprintf("TINYINT(%d)",
            $fieldDeclaration['length']
        );

        if (!empty($fieldDeclaration['unsigned'])) {
            $sqlDeclaration .= ' UNSIGNED';
        }


        return $sqlDeclaration;
    }

    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return (int) $value;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return (int) $value;
    }

    public function getName()
    {
        return self::TINYINT;
    }

    public function getBindingType()
    {
        return \PDO::PARAM_INT;
    }
}
