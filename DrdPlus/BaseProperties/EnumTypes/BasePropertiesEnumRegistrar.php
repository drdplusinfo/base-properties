<?php
declare(strict_types=1);

namespace DrdPlus\BaseProperties\EnumTypes;

use Granam\Strict\Object\StrictObject;

class BasePropertiesEnumRegistrar extends StrictObject
{
    /**
     * @throws \Doctrine\DBAL\DBALException
     */
    public static function registerAll(): void
    {
        StrengthType::registerSelf();
        AgilityType::registerSelf();
        KnackType::registerSelf();
        WillType::registerSelf();
        IntelligenceType::registerSelf();
        CharismaType::registerSelf();
    }
}