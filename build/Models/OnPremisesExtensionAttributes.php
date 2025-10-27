<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesExtensionAttributes
 */
class OnPremisesExtensionAttributes
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** First customizable extension attribute. */
    public ?string $extensionAttribute1 = null;

    /** Tenth customizable extension attribute. */
    public ?string $extensionAttribute10 = null;

    /** Eleventh customizable extension attribute. */
    public ?string $extensionAttribute11 = null;

    /** Twelfth customizable extension attribute. */
    public ?string $extensionAttribute12 = null;

    /** Thirteenth customizable extension attribute. */
    public ?string $extensionAttribute13 = null;

    /** Fourteenth customizable extension attribute. */
    public ?string $extensionAttribute14 = null;

    /** Fifteenth customizable extension attribute. */
    public ?string $extensionAttribute15 = null;

    /** Second customizable extension attribute. */
    public ?string $extensionAttribute2 = null;

    /** Third customizable extension attribute. */
    public ?string $extensionAttribute3 = null;

    /** Fourth customizable extension attribute. */
    public ?string $extensionAttribute4 = null;

    /** Fifth customizable extension attribute. */
    public ?string $extensionAttribute5 = null;

    /** Sixth customizable extension attribute. */
    public ?string $extensionAttribute6 = null;

    /** Seventh customizable extension attribute. */
    public ?string $extensionAttribute7 = null;

    /** Eighth customizable extension attribute. */
    public ?string $extensionAttribute8 = null;

    /** Ninth customizable extension attribute. */
    public ?string $extensionAttribute9 = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['extensionAttribute1'])) {
            $this->extensionAttribute1 = $data['extensionAttribute1'];
        }
        if (isset($data['extensionAttribute10'])) {
            $this->extensionAttribute10 = $data['extensionAttribute10'];
        }
        if (isset($data['extensionAttribute11'])) {
            $this->extensionAttribute11 = $data['extensionAttribute11'];
        }
        if (isset($data['extensionAttribute12'])) {
            $this->extensionAttribute12 = $data['extensionAttribute12'];
        }
        if (isset($data['extensionAttribute13'])) {
            $this->extensionAttribute13 = $data['extensionAttribute13'];
        }
        if (isset($data['extensionAttribute14'])) {
            $this->extensionAttribute14 = $data['extensionAttribute14'];
        }
        if (isset($data['extensionAttribute15'])) {
            $this->extensionAttribute15 = $data['extensionAttribute15'];
        }
        if (isset($data['extensionAttribute2'])) {
            $this->extensionAttribute2 = $data['extensionAttribute2'];
        }
        if (isset($data['extensionAttribute3'])) {
            $this->extensionAttribute3 = $data['extensionAttribute3'];
        }
        if (isset($data['extensionAttribute4'])) {
            $this->extensionAttribute4 = $data['extensionAttribute4'];
        }
        if (isset($data['extensionAttribute5'])) {
            $this->extensionAttribute5 = $data['extensionAttribute5'];
        }
        if (isset($data['extensionAttribute6'])) {
            $this->extensionAttribute6 = $data['extensionAttribute6'];
        }
        if (isset($data['extensionAttribute7'])) {
            $this->extensionAttribute7 = $data['extensionAttribute7'];
        }
        if (isset($data['extensionAttribute8'])) {
            $this->extensionAttribute8 = $data['extensionAttribute8'];
        }
        if (isset($data['extensionAttribute9'])) {
            $this->extensionAttribute9 = $data['extensionAttribute9'];
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
