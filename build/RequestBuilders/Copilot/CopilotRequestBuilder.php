<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Copilot;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CopilotRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Copilot\AdminRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Copilot\InteractionHistoryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Copilot\UsersRequestBuilder;

/**
 * Request builder for /copilot
 */
class CopilotRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get copilot
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return CopilotRoot|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): CopilotRoot|null
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
     * Deserialize response to CopilotRoot|null
     */
    private function deserializeGet(string $body): CopilotRoot|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CopilotRoot($data);
    }
    /**
     * Update copilot
     * @param CopilotRoot $body Request body
     * @return CopilotRoot|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(CopilotRoot $body): CopilotRoot|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to CopilotRoot|null
     */
    private function deserializePatch(string $body): CopilotRoot|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CopilotRoot($data);
    }
    /**
     * Navigate to admin
     *
     * @return AdminRequestBuilder
     */
    public function admin(): AdminRequestBuilder
    {
        return new AdminRequestBuilder($this->client, $this->requestUrl . '/admin');
    }
    /**
     * Navigate to interactionHistory
     *
     * @return InteractionHistoryRequestBuilder
     */
    public function interactionHistory(): InteractionHistoryRequestBuilder
    {
        return new InteractionHistoryRequestBuilder($this->client, $this->requestUrl . '/interactionHistory');
    }
    /**
     * Navigate to users
     *
     * @return UsersRequestBuilder
     */
    public function users(): UsersRequestBuilder
    {
        return new UsersRequestBuilder($this->client, $this->requestUrl . '/users');
    }
}
