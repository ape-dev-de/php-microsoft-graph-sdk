<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerPlanContainer
 */
class PlannerPlanContainer
{
    /** The identifier of the resource that contains the plan. Optional. */
    public ?string $containerId = null;

    /** 
     * The type of the resource that contains the plan. For supported types, see the previous table. Possible values are: group, unknownFutureValue, roster. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: roster. Optional.
     * @var PlannerContainerType|\stdClass|null
     */
    public mixed $type = null;

    /** The full canonical URL of the container. Optional. */
    public ?string $url = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['containerId'])) {
            $this->containerId = $data['containerId'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new PlannerContainerType($data['type']) : $data['type'];
        }
        if (isset($data['url'])) {
            $this->url = $data['url'];
        }
    }
}
