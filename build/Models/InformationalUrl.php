<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InformationalUrl
 */
class InformationalUrl
{
    public function __construct(
        /** CDN URL to the application''s logo, Read-only. */
        public ?string $logoUrl = null,
        /** Link to the application''s marketing page. For example, https://www.contoso.com/app/marketing */
        public ?string $marketingUrl = null,
        /** Link to the application''s privacy statement. For example, https://www.contoso.com/app/privacy */
        public ?string $privacyStatementUrl = null,
        /** Link to the application''s support page. For example, https://www.contoso.com/app/support */
        public ?string $supportUrl = null,
        /** Link to the application''s terms of service statement. For example, https://www.contoso.com/app/termsofservice */
        public ?string $termsOfServiceUrl = null
    ) {}
}
