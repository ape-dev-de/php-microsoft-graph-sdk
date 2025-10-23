<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OAuthConsentAppDetail
 */
class OAuthConsentAppDetail
{
    /** 
     * App scope. Possible values are: unknown, readCalendar, readContact, readMail, readAllChat, readAllFile, readAndWriteMail, sendMail, unknownFutureValue.
     * @var OAuthAppScope|\stdClass|null
     */
    public mixed $appScope = null;

    /** App display logo. */
    public ?string $displayLogo = null;

    /** App name. */
    public ?string $displayName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['appScope'])) {
            $this->appScope = is_array($data['appScope']) ? new OAuthAppScope($data['appScope']) : $data['appScope'];
        }
        if (isset($data['displayLogo'])) {
            $this->displayLogo = $data['displayLogo'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
    }
}
