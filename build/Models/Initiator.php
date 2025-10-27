<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Initiator
 */
class Initiator
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique identifier for the identity or actor. For example, in the access reviews decisions API, this property might record the id of the principal, that is, the group, user, or application that's subject to review. */
    public ?string $id = null;

    /** The display name of the identity.For drive items, the display name might not always be available or up to date. For example, if a user changes their display name the API might show the new value in a future response, but the items associated with the user don't show up as changed when using delta. */
    public ?string $displayName = null;

    /** 
     * Type of initiator. Possible values are: user, application, system, unknownFutureValue.
     * @var InitiatorType|\stdClass|null
     */
    public InitiatorType|\stdClass|null $initiatorType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['initiatorType'])) {
            $this->initiatorType = is_string($data['initiatorType']) ? InitiatorType::tryFrom($data['initiatorType']) : $data['initiatorType'];
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
