<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExtensionProperty
 */
class ExtensionProperty
{
    public function __construct(
        /** Display name of the application object on which this extension property is defined. Read-only. */
        public ?string $appDisplayName = null,
        /** Specifies the data type of the value the extension property can hold. Following values are supported. Binary - 256 bytes maximumBooleanDateTime - Must be specified in ISO 8601 format. Will be stored in UTC.Integer - 32-bit value.LargeInteger - 64-bit value.String - 256 characters maximumNot nullable. For multivalued directory extensions, these limits apply per value in the collection. */
        public ?string $dataType = null,
        /** Defines the directory extension as a multi-valued property. When true, the directory extension property can store a collection of objects of the dataType; for example, a collection of string types such as ''extensionb7b1c57b532f40b8b5ed4b7a7ba67401jobGroupTracker'': [''String 1'', ''String 2'']. The default value is false. Supports $filter (eq). */
        public ?bool $isMultiValued = null,
        /** Indicates if this extension property was synced from on-premises active directory using Microsoft Entra Connect. Read-only. */
        public ?bool $isSyncedFromOnPremises = null,
        /** Name of the extension property. Not nullable. Supports $filter (eq). */
        public ?string $name = null,
        /** @var string[] Following values are supported. Not nullable. UserGroupAdministrativeUnitApplicationDeviceOrganization */
        public array $targetObjects = []
    ) {}
}
