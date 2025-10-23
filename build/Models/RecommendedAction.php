<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecommendedAction
 */
class RecommendedAction
{
    /** Web URL to the recommended action. */
    public ?string $actionWebUrl = null;

    /** Potential improvement in the tenant security score from the recommended action. */
    public ?string $potentialScoreImpact = null;

    /** Title of the recommended action. */
    public ?string $title = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['actionWebUrl'])) {
            $this->actionWebUrl = $data['actionWebUrl'];
        }
        if (isset($data['potentialScoreImpact'])) {
            $this->potentialScoreImpact = $data['potentialScoreImpact'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
    }
}
