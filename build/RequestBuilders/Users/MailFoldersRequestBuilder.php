<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MailFolderCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\MailFolder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFolders\MailFolderRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFolders\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFolders\DeltaRequestBuilder;

/**
 * Request builder for /users/{user-id}/mailFolders
 */
class MailFoldersRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get mailFolders from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param string|null $includeHiddenFolders Include Hidden Folders
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return MailFolderCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?string $includeHiddenFolders = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): MailFolderCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($includeHiddenFolders !== null && $includeHiddenFolders !== '') {
            $queryParams['includeHiddenFolders'] = $includeHiddenFolders;
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
     * Deserialize response to MailFolderCollectionResponse|null
     */
    private function deserializeGet(string $body): MailFolderCollectionResponse|null    {
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
            $items[] = new MailFolder($item);
        }
        $collection = new MailFolderCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to mailFolders for users
     * @param MailFolder $body Request body
     * @return MailFolder|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(MailFolder $body): MailFolder|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to MailFolder|null
     */
    private function deserializePost(string $body): MailFolder|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MailFolder($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $mailFolderId The item ID
     * @return MailFolderRequestBuilder
     */
    public function byId(string $mailFolderId): MailFolderRequestBuilder
    {
        return new MailFolderRequestBuilder($this->client, $this->requestUrl . '/' . $mailFolderId);
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
    /**
     * Navigate to delta()
     *
     * @return DeltaRequestBuilder
     */
    public function delta(): DeltaRequestBuilder
    {
        return new DeltaRequestBuilder($this->client, $this->requestUrl . '/delta()');
    }
}
