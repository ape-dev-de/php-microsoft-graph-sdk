<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Planner\Plans\Tasks;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerProgressTaskBoardTaskFormat;

/**
 * Request builder for /planner/plans/{plannerPlan-id}/tasks/{plannerTask-id}/progressTaskBoardFormat
 */
class ProgressTaskBoardFormatRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get progressTaskBoardFormat from planner
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PlannerProgressTaskBoardTaskFormat|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PlannerProgressTaskBoardTaskFormat|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to PlannerProgressTaskBoardTaskFormat|null
     */
    private function deserializeGet(string $body): PlannerProgressTaskBoardTaskFormat|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PlannerProgressTaskBoardTaskFormat($data);
    }
    /**
     * Update the navigation property progressTaskBoardFormat in planner
     *
     * @param string $ifMatch ETag value.
     * @param PlannerProgressTaskBoardTaskFormat $body Request body
     * @return PlannerProgressTaskBoardTaskFormat|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(string $ifMatch, PlannerProgressTaskBoardTaskFormat $body): PlannerProgressTaskBoardTaskFormat|null
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PlannerProgressTaskBoardTaskFormat|null
     */
    private function deserializePatch(string $body): PlannerProgressTaskBoardTaskFormat|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PlannerProgressTaskBoardTaskFormat($data);
    }
    /**
     * Delete navigation property progressTaskBoardFormat for planner
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return $data;
    }
}
