<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\NotificationMessageTemplate;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\LocalizedNotificationMessagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SendTestMessageRequestBuilder;

/**
 * Request builder for {notificationMessageTemplate-id}
 */
class NotificationMessageTemplateRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get notificationMessageTemplate
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return NotificationMessageTemplate
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): NotificationMessageTemplate
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to NotificationMessageTemplate
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new NotificationMessageTemplate($data);
    }
    /**
     * Update notificationMessageTemplate
     * @param NotificationMessageTemplate $body Request body
     * @return NotificationMessageTemplate
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(NotificationMessageTemplate $body): NotificationMessageTemplate
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to NotificationMessageTemplate
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new NotificationMessageTemplate($data);
    }
    /**
     * Delete notificationMessageTemplate
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
    private function deserializeDelete(string $body): mixed
    {
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
     * Navigate to localizedNotificationMessages
     *
     * @return LocalizedNotificationMessagesRequestBuilder
     */
    public function localizedNotificationMessages(): LocalizedNotificationMessagesRequestBuilder
    {
        return new LocalizedNotificationMessagesRequestBuilder($this->client, $this->requestUrl . '/localizedNotificationMessages');
    }
    /**
     * Navigate to sendTestMessage
     *
     * @return SendTestMessageRequestBuilder
     */
    public function sendTestMessage(): SendTestMessageRequestBuilder
    {
        return new SendTestMessageRequestBuilder($this->client, $this->requestUrl . '/sendTestMessage');
    }
}
