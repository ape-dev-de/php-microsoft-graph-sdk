<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\AssignmentApprovals;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ApprovalStageCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ApprovalStage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\AssignmentApprovals\Stages\ApprovalStageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\PrivilegedAccess\Group\AssignmentApprovals\Stages\CountRequestBuilder;

/**
 * Request builder for /identityGovernance/privilegedAccess/group/assignmentApprovals/{approval-id}/stages
 */
class StagesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get stages from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ApprovalStageCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ApprovalStageCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to ApprovalStageCollectionResponse|null
     */
    private function deserializeGet(string $body): ApprovalStageCollectionResponse|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new ApprovalStage($item);
        }
        $collection = new ApprovalStageCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to stages for identityGovernance
     * @param ApprovalStage $body Request body
     * @return ApprovalStage|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ApprovalStage $body): ApprovalStage|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ApprovalStage|null
     */
    private function deserializePost(string $body): ApprovalStage|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ApprovalStage($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $approvalStageId The item ID
     * @return ApprovalStageRequestBuilder
     */
    public function byId(string $approvalStageId): ApprovalStageRequestBuilder
    {
        return new ApprovalStageRequestBuilder($this->client, $this->requestUrl . '/' . $approvalStageId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
}
