<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppsInstallationOptionsForWindows
 */
class AppsInstallationOptionsForWindows
{
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
        if (isset($data['isMicrosoft365AppsEnabled'])) {
            $this->isMicrosoft365AppsEnabled = $data['isMicrosoft365AppsEnabled'];
        }
        if (isset($data['isProjectEnabled'])) {
            $this->isProjectEnabled = $data['isProjectEnabled'];
        }
        if (isset($data['isSkypeForBusinessEnabled'])) {
            $this->isSkypeForBusinessEnabled = $data['isSkypeForBusinessEnabled'];
        }
        if (isset($data['isVisioEnabled'])) {
            $this->isVisioEnabled = $data['isVisioEnabled'];
        }
    }
}
