<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionInputConfiguration
 */
class AuthenticationAttributeCollectionInputConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The built-in or custom attribute for which a value is being collected. */
    public ?string $attribute = null;

    /** The default value of the attribute displayed to the end user. The capability to set the default value isn't available through the Microsoft Entra admin center. */
    public ?string $defaultValue = null;

    /** Defines whether the attribute is editable by the end user. */
    public ?bool $editable = null;

    /** Defines whether the attribute is displayed to the end user. The capability to hide isn't available through the Microsoft Entra admin center. */
    public ?bool $hidden = null;

    /**  */
    public ?AuthenticationAttributeCollectionInputType $inputType = null;

    /** The label of the attribute field that's displayed to end user, unless overridden. */
    public ?string $label = null;

    /** 
     * The option values for certain multiple-option input types.
     * @var AuthenticationAttributeCollectionOptionConfiguration[]
     */
    public array $options = [];

    /** Defines whether the field is required. */
    public ?bool $required = null;

    /** The regex for the value of the field. For more information about the supported regexes, see validationRegEx values for inputType objects. To understand how to specify regexes, see the Regular expressions cheat sheet. */
    public ?string $validationRegEx = null;

    /** Defines whether Microsoft Entra ID stores the value that it collects. */
    public ?bool $writeToDirectory = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['attribute'])) {
            $this->attribute = $data['attribute'];
        }
        if (isset($data['defaultValue'])) {
            $this->defaultValue = $data['defaultValue'];
        }
        if (isset($data['editable'])) {
            $this->editable = $data['editable'];
        }
        if (isset($data['hidden'])) {
            $this->hidden = $data['hidden'];
        }
        if (isset($data['inputType'])) {
            $this->inputType = is_array($data['inputType']) ? new AuthenticationAttributeCollectionInputType($data['inputType']) : $data['inputType'];
        }
        if (isset($data['label'])) {
            $this->label = $data['label'];
        }
        if (isset($data['options'])) {
            $this->options = $data['options'];
        }
        if (isset($data['required'])) {
            $this->required = $data['required'];
        }
        if (isset($data['validationRegEx'])) {
            $this->validationRegEx = $data['validationRegEx'];
        }
        if (isset($data['writeToDirectory'])) {
            $this->writeToDirectory = $data['writeToDirectory'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
