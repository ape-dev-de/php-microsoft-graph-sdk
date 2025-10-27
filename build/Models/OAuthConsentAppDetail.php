<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OAuthConsentAppDetail
 */
class OAuthConsentAppDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * App scope. Possible values are: unknown, readCalendar, readContact, readMail, readAllChat, readAllFile, readAndWriteMail, sendMail, unknownFutureValue.
     * @var OAuthAppScope|\stdClass|null
     */
    public OAuthAppScope|\stdClass|null $appScope = null;

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
        $this->rawData = $data;
        if (isset($data['appScope'])) {
            $this->appScope = is_string($data['appScope']) ? OAuthAppScope::tryFrom($data['appScope']) : $data['appScope'];
        }
        if (isset($data['displayLogo'])) {
            $this->displayLogo = $data['displayLogo'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
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
