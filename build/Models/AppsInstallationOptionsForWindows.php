<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppsInstallationOptionsForWindows
 */
class AppsInstallationOptionsForWindows
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Specifies whether users can install Microsoft 365 apps, including Skype for Business, on their Windows devices. The default value is true. */
    public ?bool $isMicrosoft365AppsEnabled = null;

    /** Specifies whether users can install Microsoft Project on their Windows devices. The default value is true. */
    public ?bool $isProjectEnabled = null;

    /** Specifies whether users can install Skype for Business (standalone) on their Windows devices. The default value is true. */
    public ?bool $isSkypeForBusinessEnabled = null;

    /** Specifies whether users can install Visio on their Windows devices. The default value is true. */
    public ?bool $isVisioEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isMicrosoft365AppsEnabled'])) {
            $this->isMicrosoft365AppsEnabled = is_bool($data['isMicrosoft365AppsEnabled']) ? $data['isMicrosoft365AppsEnabled'] : (bool)$data['isMicrosoft365AppsEnabled'];
        }
        if (isset($data['isProjectEnabled'])) {
            $this->isProjectEnabled = is_bool($data['isProjectEnabled']) ? $data['isProjectEnabled'] : (bool)$data['isProjectEnabled'];
        }
        if (isset($data['isSkypeForBusinessEnabled'])) {
            $this->isSkypeForBusinessEnabled = is_bool($data['isSkypeForBusinessEnabled']) ? $data['isSkypeForBusinessEnabled'] : (bool)$data['isSkypeForBusinessEnabled'];
        }
        if (isset($data['isVisioEnabled'])) {
            $this->isVisioEnabled = is_bool($data['isVisioEnabled']) ? $data['isVisioEnabled'] : (bool)$data['isVisioEnabled'];
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
