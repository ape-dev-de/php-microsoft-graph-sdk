<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IntuneBrand resources
 *
 * Available select fields:
 * - contactITEmailAddress
 * - contactITName
 * - contactITNotes
 * - contactITPhoneNumber
 * - darkBackgroundLogo
 * - displayName
 * - lightBackgroundLogo
 * - onlineSupportSiteName
 * - onlineSupportSiteUrl
 * - privacyUrl
 * - showDisplayNameNextToLogo
 * - showLogo
 * - showNameNextToLogo
 * - themeColor
 */
class IntuneBrandQueryOptions extends QueryOptions
{
    public const FIELD_CONTACT_ITEMAIL_ADDRESS = 'contactITEmailAddress';
    public const FIELD_CONTACT_ITNAME = 'contactITName';
    public const FIELD_CONTACT_ITNOTES = 'contactITNotes';
    public const FIELD_CONTACT_ITPHONE_NUMBER = 'contactITPhoneNumber';
    public const FIELD_DARK_BACKGROUND_LOGO = 'darkBackgroundLogo';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LIGHT_BACKGROUND_LOGO = 'lightBackgroundLogo';
    public const FIELD_ONLINE_SUPPORT_SITE_NAME = 'onlineSupportSiteName';
    public const FIELD_ONLINE_SUPPORT_SITE_URL = 'onlineSupportSiteUrl';
    public const FIELD_PRIVACY_URL = 'privacyUrl';
    public const FIELD_SHOW_DISPLAY_NAME_NEXT_TO_LOGO = 'showDisplayNameNextToLogo';
    public const FIELD_SHOW_LOGO = 'showLogo';
    public const FIELD_SHOW_NAME_NEXT_TO_LOGO = 'showNameNextToLogo';
    public const FIELD_THEME_COLOR = 'themeColor';

    /**
     * Select specific IntuneBrand properties
     * 
     * @param array<string> $select Use IntuneBrandQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
