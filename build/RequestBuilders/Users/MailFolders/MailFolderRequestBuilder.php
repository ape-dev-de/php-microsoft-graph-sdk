<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFolders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MailFolder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFolders\ChildFoldersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFolders\MessageRulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFolders\MessagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFolders\CopyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFolders\MoveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFolders\PermanentDeleteRequestBuilder;

/**
 * Request builder for /users/{user-id}/mailFolders/{mailFolder-id}
 */
class MailFolderRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get mailFolders from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param string|null $includeHiddenFolders Include Hidden Folders
     * @return MailFolder|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?string $includeHiddenFolders = null): MailFolder|null
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
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to MailFolder|null
     */
    private function deserializeGet(string $body): MailFolder|null    {
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
     * Update the navigation property mailFolders in users
     * @param MailFolder $body Request body
     * @return MailFolder|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MailFolder $body): MailFolder|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MailFolder|null
     */
    private function deserializePatch(string $body): MailFolder|null    {
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
     * Delete navigation property mailFolders for users
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
    /**
     * Navigate to childFolders
     *
     * @return ChildFoldersRequestBuilder
     */
    public function childFolders(): ChildFoldersRequestBuilder
    {
        return new ChildFoldersRequestBuilder($this->client, $this->requestUrl . '/childFolders');
    }
    /**
     * Navigate to messageRules
     *
     * @return MessageRulesRequestBuilder
     */
    public function messageRules(): MessageRulesRequestBuilder
    {
        return new MessageRulesRequestBuilder($this->client, $this->requestUrl . '/messageRules');
    }
    /**
     * Navigate to messages
     *
     * @return MessagesRequestBuilder
     */
    public function messages(): MessagesRequestBuilder
    {
        return new MessagesRequestBuilder($this->client, $this->requestUrl . '/messages');
    }
    /**
     * Navigate to copy
     *
     * @return CopyRequestBuilder
     */
    public function copy(): CopyRequestBuilder
    {
        return new CopyRequestBuilder($this->client, $this->requestUrl . '/copy');
    }
    /**
     * Navigate to move
     *
     * @return MoveRequestBuilder
     */
    public function move(): MoveRequestBuilder
    {
        return new MoveRequestBuilder($this->client, $this->requestUrl . '/move');
    }
    /**
     * Navigate to permanentDelete
     *
     * @return PermanentDeleteRequestBuilder
     */
    public function permanentDelete(): PermanentDeleteRequestBuilder
    {
        return new PermanentDeleteRequestBuilder($this->client, $this->requestUrl . '/permanentDelete');
    }
}
