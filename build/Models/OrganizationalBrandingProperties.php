<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OrganizationalBrandingProperties
 */
class OrganizationalBrandingProperties
{
    /**
     * Color that appears in place of the background image in low-bandwidth connections. We recommend that you use the primary color of your banner logo or your organization color. Specify this in hexadecimal format, for example, white is #FFFFFF.
     */
    private ?string $backgroundColor;

    /**
     * Image that appears as the background of the sign-in page. The allowed types are PNG or JPEG not smaller than 300 KB and not larger than 1920 × 1080 pixels. A smaller image reduces bandwidth requirements and make the page load faster.
     */
    private ?string $backgroundImage;

    /**
     * A relative URL for the backgroundImage property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     */
    private ?string $backgroundImageRelativeUrl;

    /**
     * A banner version of your company logo that appears on the sign-in page. The allowed types are PNG or JPEG not larger than 36 × 245 pixels. We recommend using a transparent image with no padding around the logo.
     */
    private ?string $bannerLogo;

    /**
     * A relative URL for the bannerLogo property that is combined with a CDN base URL from the cdnList to provide the read-only version served by a CDN. Read-only.
     */
    private ?string $bannerLogoRelativeUrl;

    /**
     * A list of base URLs for all available CDN providers that are serving the assets of the current resource. Several CDN providers are used at the same time for high availability of read requests. Read-only.
     * @var string[]
     */
    private array $cdnList = [];

    /**
     * Represents the content options to be customized throughout the authentication flow for a tenant. NOTE: Supported by Microsoft Entra External ID in external tenants only.
     */
    private ?string $contentCustomization;

    /**
     * A custom URL for resetting account credentials. This URL must be in ASCII format or non-ASCII characters must be URL encoded, and not exceed 128 characters.
     */
    private ?string $customAccountResetCredentialsUrl;

    /**
     * A string to replace the default 'Can't access your account?' self-service password reset (SSPR) hyperlink text on the sign-in page. This text must be in Unicode format and not exceed 256 characters.
     */
    private ?string $customCannotAccessYourAccountText;

    /**
     * A custom URL to replace the default URL of the self-service password reset (SSPR) ''Can''t access your account?'' hyperlink on the sign-in page. This URL must be in ASCII format or non-ASCII characters must be URL encoded, and not exceed 128 characters. DO NOT USE. Use customAccountResetCredentialsUrl instead.
     */
    private ?string $customCannotAccessYourAccountUrl;

    /**
     * CSS styling that appears on the sign-in page. The allowed format is .css format only and not larger than 25 KB.
     */
    private ?string $customCSS;

    /**
     * A relative URL for the customCSS property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     */
    private ?string $customCSSRelativeUrl;

    /**
     * A string to replace the default 'Forgot my password' hyperlink text on the sign-in form. This text must be in Unicode format and not exceed 256 characters.
     */
    private ?string $customForgotMyPasswordText;

    /**
     * A string to replace the default 'Privacy and Cookies' hyperlink text in the footer. This text must be in Unicode format and not exceed 256 characters.
     */
    private ?string $customPrivacyAndCookiesText;

    /**
     * A custom URL to replace the default URL of the ''Privacy and Cookies'' hyperlink in the footer. This URL must be in ASCII format or non-ASCII characters must be URL encoded, and not exceed 128 characters.
     */
    private ?string $customPrivacyAndCookiesUrl;

    /**
     * A string to replace the default ''reset it now'' hyperlink text on the sign-in form. This text must be in Unicode format and not exceed 256 characters. DO NOT USE: Customization of the ''reset it now'' hyperlink text is currently not supported.
     */
    private ?string $customResetItNowText;

    /**
     * A string to replace the the default 'Terms of Use' hyperlink text in the footer. This text must be in Unicode format and not exceed 256 characters.
     */
    private ?string $customTermsOfUseText;

    /**
     * A custom URL to replace the default URL of the ''Terms of Use'' hyperlink in the footer. This URL must be in ASCII format or non-ASCII characters must be URL encoded, and not exceed 128characters.
     */
    private ?string $customTermsOfUseUrl;

    /**
     * A custom icon (favicon) to replace a default Microsoft product favicon on a Microsoft Entra tenant.
     */
    private ?string $favicon;

    /**
     * A relative url for the favicon above that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     */
    private ?string $faviconRelativeUrl;

    /**
     * The RGB color to apply to customize the color of the header.
     */
    private ?string $headerBackgroundColor;

    /**
     * A company logo that appears in the header of the sign-in page. The allowed types are PNG or JPEG not larger than 36 × 245 pixels. We recommend using a transparent image with no padding around the logo.
     */
    private ?string $headerLogo;

    /**
     * A relative URL for the headerLogo property that is combined with a CDN base URL from the cdnList to provide the read-only version served by a CDN. Read-only.
     */
    private ?string $headerLogoRelativeUrl;

    /**
     * Represents the layout configuration to be displayed on the login page for a tenant.
     */
    private ?string $loginPageLayoutConfiguration;

    /**
     * Represents the various texts that can be hidden on the login page for a tenant.
     */
    private ?string $loginPageTextVisibilitySettings;

    /**
     * Text that appears at the bottom of the sign-in box. Use this to communicate additional information, such as the phone number to your help desk or a legal statement. This text must be in Unicode format and not exceed 1024 characters.
     */
    private ?string $signInPageText;

    /**
     * A square version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG not larger than 240 x 240 pixels and not more than 10 KB in size. We recommend using a transparent image with no padding around the logo.
     */
    private ?string $squareLogo;

    /**
     * A square dark version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG not larger than 240 x 240 pixels and not more than 10 KB in size. We recommend using a transparent image with no padding around the logo.
     */
    private ?string $squareLogoDark;

    /**
     * A relative URL for the squareLogoDark property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     */
    private ?string $squareLogoDarkRelativeUrl;

    /**
     * A relative URL for the squareLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     */
    private ?string $squareLogoRelativeUrl;

    /**
     * A string that shows as the hint in the username textbox on the sign-in screen. This text must be a Unicode, without links or code, and can''t exceed 64 characters.
     */
    private ?string $usernameHintText;


    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor(?string $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    public function getBackgroundImage(): ?string
    {
        return $this->backgroundImage;
    }

    public function setBackgroundImage(?string $backgroundImage): self
    {
        $this->backgroundImage = $backgroundImage;
        return $this;
    }

    public function getBackgroundImageRelativeUrl(): ?string
    {
        return $this->backgroundImageRelativeUrl;
    }

    public function setBackgroundImageRelativeUrl(?string $backgroundImageRelativeUrl): self
    {
        $this->backgroundImageRelativeUrl = $backgroundImageRelativeUrl;
        return $this;
    }

    public function getBannerLogo(): ?string
    {
        return $this->bannerLogo;
    }

    public function setBannerLogo(?string $bannerLogo): self
    {
        $this->bannerLogo = $bannerLogo;
        return $this;
    }

    public function getBannerLogoRelativeUrl(): ?string
    {
        return $this->bannerLogoRelativeUrl;
    }

    public function setBannerLogoRelativeUrl(?string $bannerLogoRelativeUrl): self
    {
        $this->bannerLogoRelativeUrl = $bannerLogoRelativeUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCdnList(): array
    {
        return $this->cdnList;
    }

    /**
     * @param string[] $cdnList
     */
    public function setCdnList(array $cdnList): self
    {
        $this->cdnList = $cdnList;
        return $this;
    }

    public function getContentCustomization(): ?string
    {
        return $this->contentCustomization;
    }

    public function setContentCustomization(?string $contentCustomization): self
    {
        $this->contentCustomization = $contentCustomization;
        return $this;
    }

    public function getCustomAccountResetCredentialsUrl(): ?string
    {
        return $this->customAccountResetCredentialsUrl;
    }

    public function setCustomAccountResetCredentialsUrl(?string $customAccountResetCredentialsUrl): self
    {
        $this->customAccountResetCredentialsUrl = $customAccountResetCredentialsUrl;
        return $this;
    }

    public function getCustomCannotAccessYourAccountText(): ?string
    {
        return $this->customCannotAccessYourAccountText;
    }

    public function setCustomCannotAccessYourAccountText(?string $customCannotAccessYourAccountText): self
    {
        $this->customCannotAccessYourAccountText = $customCannotAccessYourAccountText;
        return $this;
    }

    public function getCustomCannotAccessYourAccountUrl(): ?string
    {
        return $this->customCannotAccessYourAccountUrl;
    }

    public function setCustomCannotAccessYourAccountUrl(?string $customCannotAccessYourAccountUrl): self
    {
        $this->customCannotAccessYourAccountUrl = $customCannotAccessYourAccountUrl;
        return $this;
    }

    public function getCustomCSS(): ?string
    {
        return $this->customCSS;
    }

    public function setCustomCSS(?string $customCSS): self
    {
        $this->customCSS = $customCSS;
        return $this;
    }

    public function getCustomCSSRelativeUrl(): ?string
    {
        return $this->customCSSRelativeUrl;
    }

    public function setCustomCSSRelativeUrl(?string $customCSSRelativeUrl): self
    {
        $this->customCSSRelativeUrl = $customCSSRelativeUrl;
        return $this;
    }

    public function getCustomForgotMyPasswordText(): ?string
    {
        return $this->customForgotMyPasswordText;
    }

    public function setCustomForgotMyPasswordText(?string $customForgotMyPasswordText): self
    {
        $this->customForgotMyPasswordText = $customForgotMyPasswordText;
        return $this;
    }

    public function getCustomPrivacyAndCookiesText(): ?string
    {
        return $this->customPrivacyAndCookiesText;
    }

    public function setCustomPrivacyAndCookiesText(?string $customPrivacyAndCookiesText): self
    {
        $this->customPrivacyAndCookiesText = $customPrivacyAndCookiesText;
        return $this;
    }

    public function getCustomPrivacyAndCookiesUrl(): ?string
    {
        return $this->customPrivacyAndCookiesUrl;
    }

    public function setCustomPrivacyAndCookiesUrl(?string $customPrivacyAndCookiesUrl): self
    {
        $this->customPrivacyAndCookiesUrl = $customPrivacyAndCookiesUrl;
        return $this;
    }

    public function getCustomResetItNowText(): ?string
    {
        return $this->customResetItNowText;
    }

    public function setCustomResetItNowText(?string $customResetItNowText): self
    {
        $this->customResetItNowText = $customResetItNowText;
        return $this;
    }

    public function getCustomTermsOfUseText(): ?string
    {
        return $this->customTermsOfUseText;
    }

    public function setCustomTermsOfUseText(?string $customTermsOfUseText): self
    {
        $this->customTermsOfUseText = $customTermsOfUseText;
        return $this;
    }

    public function getCustomTermsOfUseUrl(): ?string
    {
        return $this->customTermsOfUseUrl;
    }

    public function setCustomTermsOfUseUrl(?string $customTermsOfUseUrl): self
    {
        $this->customTermsOfUseUrl = $customTermsOfUseUrl;
        return $this;
    }

    public function getFavicon(): ?string
    {
        return $this->favicon;
    }

    public function setFavicon(?string $favicon): self
    {
        $this->favicon = $favicon;
        return $this;
    }

    public function getFaviconRelativeUrl(): ?string
    {
        return $this->faviconRelativeUrl;
    }

    public function setFaviconRelativeUrl(?string $faviconRelativeUrl): self
    {
        $this->faviconRelativeUrl = $faviconRelativeUrl;
        return $this;
    }

    public function getHeaderBackgroundColor(): ?string
    {
        return $this->headerBackgroundColor;
    }

    public function setHeaderBackgroundColor(?string $headerBackgroundColor): self
    {
        $this->headerBackgroundColor = $headerBackgroundColor;
        return $this;
    }

    public function getHeaderLogo(): ?string
    {
        return $this->headerLogo;
    }

    public function setHeaderLogo(?string $headerLogo): self
    {
        $this->headerLogo = $headerLogo;
        return $this;
    }

    public function getHeaderLogoRelativeUrl(): ?string
    {
        return $this->headerLogoRelativeUrl;
    }

    public function setHeaderLogoRelativeUrl(?string $headerLogoRelativeUrl): self
    {
        $this->headerLogoRelativeUrl = $headerLogoRelativeUrl;
        return $this;
    }

    public function getLoginPageLayoutConfiguration(): ?string
    {
        return $this->loginPageLayoutConfiguration;
    }

    public function setLoginPageLayoutConfiguration(?string $loginPageLayoutConfiguration): self
    {
        $this->loginPageLayoutConfiguration = $loginPageLayoutConfiguration;
        return $this;
    }

    public function getLoginPageTextVisibilitySettings(): ?string
    {
        return $this->loginPageTextVisibilitySettings;
    }

    public function setLoginPageTextVisibilitySettings(?string $loginPageTextVisibilitySettings): self
    {
        $this->loginPageTextVisibilitySettings = $loginPageTextVisibilitySettings;
        return $this;
    }

    public function getSignInPageText(): ?string
    {
        return $this->signInPageText;
    }

    public function setSignInPageText(?string $signInPageText): self
    {
        $this->signInPageText = $signInPageText;
        return $this;
    }

    public function getSquareLogo(): ?string
    {
        return $this->squareLogo;
    }

    public function setSquareLogo(?string $squareLogo): self
    {
        $this->squareLogo = $squareLogo;
        return $this;
    }

    public function getSquareLogoDark(): ?string
    {
        return $this->squareLogoDark;
    }

    public function setSquareLogoDark(?string $squareLogoDark): self
    {
        $this->squareLogoDark = $squareLogoDark;
        return $this;
    }

    public function getSquareLogoDarkRelativeUrl(): ?string
    {
        return $this->squareLogoDarkRelativeUrl;
    }

    public function setSquareLogoDarkRelativeUrl(?string $squareLogoDarkRelativeUrl): self
    {
        $this->squareLogoDarkRelativeUrl = $squareLogoDarkRelativeUrl;
        return $this;
    }

    public function getSquareLogoRelativeUrl(): ?string
    {
        return $this->squareLogoRelativeUrl;
    }

    public function setSquareLogoRelativeUrl(?string $squareLogoRelativeUrl): self
    {
        $this->squareLogoRelativeUrl = $squareLogoRelativeUrl;
        return $this;
    }

    public function getUsernameHintText(): ?string
    {
        return $this->usernameHintText;
    }

    public function setUsernameHintText(?string $usernameHintText): self
    {
        $this->usernameHintText = $usernameHintText;
        return $this;
    }

}
