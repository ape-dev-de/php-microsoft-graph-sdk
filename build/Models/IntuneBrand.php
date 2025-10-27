<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IntuneBrand
 */
class IntuneBrand
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Email address of the person/organization responsible for IT support. */
    public ?string $contactITEmailAddress = null;

    /** Name of the person/organization responsible for IT support. */
    public ?string $contactITName = null;

    /** Text comments regarding the person/organization responsible for IT support. */
    public ?string $contactITNotes = null;

    /** Phone number of the person/organization responsible for IT support. */
    public ?string $contactITPhoneNumber = null;

    /** 
     * Logo image displayed in Company Portal apps which have a dark background behind the logo.
     * @var MimeContent|\stdClass|null
     */
    public MimeContent|\stdClass|null $darkBackgroundLogo = null;

    /** Company/organization name that is displayed to end users. */
    public ?string $displayName = null;

    /** 
     * Logo image displayed in Company Portal apps which have a light background behind the logo.
     * @var MimeContent|\stdClass|null
     */
    public MimeContent|\stdClass|null $lightBackgroundLogo = null;

    /** Display name of the company/organization’s IT helpdesk site. */
    public ?string $onlineSupportSiteName = null;

    /** URL to the company/organization’s IT helpdesk site. */
    public ?string $onlineSupportSiteUrl = null;

    /** URL to the company/organization’s privacy policy. */
    public ?string $privacyUrl = null;

    /** Boolean that represents whether the administrator-supplied display name will be shown next to the logo image. */
    public ?bool $showDisplayNameNextToLogo = null;

    /** Boolean that represents whether the administrator-supplied logo images are shown or not shown. */
    public ?bool $showLogo = null;

    /** Boolean that represents whether the administrator-supplied display name will be shown next to the logo image. */
    public ?bool $showNameNextToLogo = null;

    /** 
     * Primary theme color used in the Company Portal applications and web portal.
     * @var RgbColor|\stdClass|null
     */
    public RgbColor|\stdClass|null $themeColor = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['contactITEmailAddress'])) {
            $this->contactITEmailAddress = $data['contactITEmailAddress'];
        }
        if (isset($data['contactITName'])) {
            $this->contactITName = $data['contactITName'];
        }
        if (isset($data['contactITNotes'])) {
            $this->contactITNotes = $data['contactITNotes'];
        }
        if (isset($data['contactITPhoneNumber'])) {
            $this->contactITPhoneNumber = $data['contactITPhoneNumber'];
        }
        if (isset($data['darkBackgroundLogo'])) {
            $this->darkBackgroundLogo = is_array($data['darkBackgroundLogo']) ? new MimeContent($data['darkBackgroundLogo']) : $data['darkBackgroundLogo'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lightBackgroundLogo'])) {
            $this->lightBackgroundLogo = is_array($data['lightBackgroundLogo']) ? new MimeContent($data['lightBackgroundLogo']) : $data['lightBackgroundLogo'];
        }
        if (isset($data['onlineSupportSiteName'])) {
            $this->onlineSupportSiteName = $data['onlineSupportSiteName'];
        }
        if (isset($data['onlineSupportSiteUrl'])) {
            $this->onlineSupportSiteUrl = $data['onlineSupportSiteUrl'];
        }
        if (isset($data['privacyUrl'])) {
            $this->privacyUrl = $data['privacyUrl'];
        }
        if (isset($data['showDisplayNameNextToLogo'])) {
            $this->showDisplayNameNextToLogo = $data['showDisplayNameNextToLogo'];
        }
        if (isset($data['showLogo'])) {
            $this->showLogo = $data['showLogo'];
        }
        if (isset($data['showNameNextToLogo'])) {
            $this->showNameNextToLogo = $data['showNameNextToLogo'];
        }
        if (isset($data['themeColor'])) {
            $this->themeColor = is_array($data['themeColor']) ? new RgbColor($data['themeColor']) : $data['themeColor'];
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
