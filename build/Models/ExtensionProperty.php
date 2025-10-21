<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExtensionProperty
 */
class ExtensionProperty
{
    /**
     * Display name of the application object on which this extension property is defined. Read-only.
     */
    private ?string $appDisplayName;

    /**
     * Specifies the data type of the value the extension property can hold. Following values are supported. Binary - 256 bytes maximumBooleanDateTime - Must be specified in ISO 8601 format. Will be stored in UTC.Integer - 32-bit value.LargeInteger - 64-bit value.String - 256 characters maximumNot nullable. For multivalued directory extensions, these limits apply per value in the collection.
     */
    private ?string $dataType;

    /**
     * Defines the directory extension as a multi-valued property. When true, the directory extension property can store a collection of objects of the dataType; for example, a collection of string types such as ''extensionb7b1c57b532f40b8b5ed4b7a7ba67401jobGroupTracker'': [''String 1'', ''String 2'']. The default value is false. Supports $filter (eq).
     */
    private ?bool $isMultiValued;

    /**
     * Indicates if this extension property was synced from on-premises active directory using Microsoft Entra Connect. Read-only.
     */
    private ?bool $isSyncedFromOnPremises;

    /**
     * Name of the extension property. Not nullable. Supports $filter (eq).
     */
    private ?string $name;

    /**
     * Following values are supported. Not nullable. UserGroupAdministrativeUnitApplicationDeviceOrganization
     * @var string[]
     */
    private array $targetObjects = [];


    public function getAppDisplayName(): ?string
    {
        return $this->appDisplayName;
    }

    public function setAppDisplayName(?string $appDisplayName): self
    {
        $this->appDisplayName = $appDisplayName;
        return $this;
    }

    public function getDataType(): ?string
    {
        return $this->dataType;
    }

    public function setDataType(?string $dataType): self
    {
        $this->dataType = $dataType;
        return $this;
    }

    public function getIsMultiValued(): ?bool
    {
        return $this->isMultiValued;
    }

    public function setIsMultiValued(?bool $isMultiValued): self
    {
        $this->isMultiValued = $isMultiValued;
        return $this;
    }

    public function getIsSyncedFromOnPremises(): ?bool
    {
        return $this->isSyncedFromOnPremises;
    }

    public function setIsSyncedFromOnPremises(?bool $isSyncedFromOnPremises): self
    {
        $this->isSyncedFromOnPremises = $isSyncedFromOnPremises;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTargetObjects(): array
    {
        return $this->targetObjects;
    }

    /**
     * @param string[] $targetObjects
     */
    public function setTargetObjects(array $targetObjects): self
    {
        $this->targetObjects = $targetObjects;
        return $this;
    }

}
