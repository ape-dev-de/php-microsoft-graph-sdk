<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PeopleAdminSettings
 */
class PeopleAdminSettings
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents administrator settings that manage the support for item insights in an organization.
     * @var InsightsSettings|\stdClass|null
     */
    public mixed $itemInsights = null;

    /** 
     * Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card.
     * @var ProfileCardProperty[]
     */
    public array $profileCardProperties = [];

    /** 
     * Represents administrator settings that manage the support of pronouns in an organization.
     * @var PronounsSettings|\stdClass|null
     */
    public mixed $pronouns = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['itemInsights'])) {
            $this->itemInsights = $data['itemInsights'];
        }
        if (isset($data['profileCardProperties'])) {
            $this->profileCardProperties = $data['profileCardProperties'];
        }
        if (isset($data['pronouns'])) {
            $this->pronouns = $data['pronouns'];
        }
    }
}
