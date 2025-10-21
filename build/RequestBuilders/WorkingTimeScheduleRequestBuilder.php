<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkingTimeSchedule;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkingTimeScheduleQueryOptions;

/**
 * Request builder for WorkingTimeSchedule
 */
class WorkingTimeScheduleRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkingTimeScheduleQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkingTimeSchedule
     */
    public function get(?WorkingTimeScheduleQueryOptions $options = null, ?array $queryParameters = null): WorkingTimeSchedule
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkingTimeSchedule::class);
    }

    /**
     * Create a new WorkingTimeSchedule
     *
     * @param WorkingTimeSchedule $item The item to create
     * @return WorkingTimeSchedule
     */
    public function post(WorkingTimeSchedule $item): WorkingTimeSchedule
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkingTimeSchedule::class);
    }
    /**
     * Get endWorkingTime request builder
     *
     * @return EndWorkingTimeRequestBuilder
     */
    public function endWorkingTime(): EndWorkingTimeRequestBuilder
    {
        return new EndWorkingTimeRequestBuilder($this->client, $this->buildPath('endWorkingTime'));
    }

    /**
     * Get startWorkingTime request builder
     *
     * @return StartWorkingTimeRequestBuilder
     */
    public function startWorkingTime(): StartWorkingTimeRequestBuilder
    {
        return new StartWorkingTimeRequestBuilder($this->client, $this->buildPath('startWorkingTime'));
    }

}
