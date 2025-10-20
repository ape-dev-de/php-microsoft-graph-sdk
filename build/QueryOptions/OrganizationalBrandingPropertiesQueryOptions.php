<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OrganizationalBrandingProperties resources
 *
 * Available select fields:
 * - backgroundColor
 * - backgroundImage
 * - backgroundImageRelativeUrl
 * - bannerLogo
 * - bannerLogoRelativeUrl
 * - cdnList
 * - contentCustomization
 * - customAccountResetCredentialsUrl
 * - customCannotAccessYourAccountText
 * - customCannotAccessYourAccountUrl
 * - customCSS
 * - customCSSRelativeUrl
 * - customForgotMyPasswordText
 * - customPrivacyAndCookiesText
 * - customPrivacyAndCookiesUrl
 * - customResetItNowText
 * - customTermsOfUseText
 * - customTermsOfUseUrl
 * - favicon
 * - faviconRelativeUrl
 * - headerBackgroundColor
 * - headerLogo
 * - headerLogoRelativeUrl
 * - loginPageLayoutConfiguration
 * - loginPageTextVisibilitySettings
 * - signInPageText
 * - squareLogo
 * - squareLogoDark
 * - squareLogoDarkRelativeUrl
 * - squareLogoRelativeUrl
 * - usernameHintText
 */
class OrganizationalBrandingPropertiesQueryOptions extends QueryOptions
{
    public const FIELD_BACKGROUND_COLOR = 'backgroundColor';
    public const FIELD_BACKGROUND_IMAGE = 'backgroundImage';
    public const FIELD_BACKGROUND_IMAGE_RELATIVE_URL = 'backgroundImageRelativeUrl';
    public const FIELD_BANNER_LOGO = 'bannerLogo';
    public const FIELD_BANNER_LOGO_RELATIVE_URL = 'bannerLogoRelativeUrl';
    public const FIELD_CDN_LIST = 'cdnList';
    public const FIELD_CONTENT_CUSTOMIZATION = 'contentCustomization';
    public const FIELD_CUSTOM_ACCOUNT_RESET_CREDENTIALS_URL = 'customAccountResetCredentialsUrl';
    public const FIELD_CUSTOM_CANNOT_ACCESS_YOUR_ACCOUNT_TEXT = 'customCannotAccessYourAccountText';
    public const FIELD_CUSTOM_CANNOT_ACCESS_YOUR_ACCOUNT_URL = 'customCannotAccessYourAccountUrl';
    public const FIELD_CUSTOM_CSS = 'customCSS';
    public const FIELD_CUSTOM_CSSRELATIVE_URL = 'customCSSRelativeUrl';
    public const FIELD_CUSTOM_FORGOT_MY_PASSWORD_TEXT = 'customForgotMyPasswordText';
    public const FIELD_CUSTOM_PRIVACY_AND_COOKIES_TEXT = 'customPrivacyAndCookiesText';
    public const FIELD_CUSTOM_PRIVACY_AND_COOKIES_URL = 'customPrivacyAndCookiesUrl';
    public const FIELD_CUSTOM_RESET_IT_NOW_TEXT = 'customResetItNowText';
    public const FIELD_CUSTOM_TERMS_OF_USE_TEXT = 'customTermsOfUseText';
    public const FIELD_CUSTOM_TERMS_OF_USE_URL = 'customTermsOfUseUrl';
    public const FIELD_FAVICON = 'favicon';
    public const FIELD_FAVICON_RELATIVE_URL = 'faviconRelativeUrl';
    public const FIELD_HEADER_BACKGROUND_COLOR = 'headerBackgroundColor';
    public const FIELD_HEADER_LOGO = 'headerLogo';
    public const FIELD_HEADER_LOGO_RELATIVE_URL = 'headerLogoRelativeUrl';
    public const FIELD_LOGIN_PAGE_LAYOUT_CONFIGURATION = 'loginPageLayoutConfiguration';
    public const FIELD_LOGIN_PAGE_TEXT_VISIBILITY_SETTINGS = 'loginPageTextVisibilitySettings';
    public const FIELD_SIGN_IN_PAGE_TEXT = 'signInPageText';
    public const FIELD_SQUARE_LOGO = 'squareLogo';
    public const FIELD_SQUARE_LOGO_DARK = 'squareLogoDark';
    public const FIELD_SQUARE_LOGO_DARK_RELATIVE_URL = 'squareLogoDarkRelativeUrl';
    public const FIELD_SQUARE_LOGO_RELATIVE_URL = 'squareLogoRelativeUrl';
    public const FIELD_USERNAME_HINT_TEXT = 'usernameHintText';

    /**
     * Select specific OrganizationalBrandingProperties properties
     * 
     * @param array<string> $select Use OrganizationalBrandingPropertiesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
