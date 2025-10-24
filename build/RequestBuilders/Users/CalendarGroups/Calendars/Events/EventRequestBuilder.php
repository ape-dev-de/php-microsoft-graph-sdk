<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Event;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events\AttachmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events\CalendarRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events\ExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events\InstancesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events\AcceptRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events\CancelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events\DeclineRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events\DismissReminderRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events\ForwardRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events\PermanentDeleteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events\SnoozeReminderRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\CalendarGroups\Calendars\Events\TentativelyAcceptRequestBuilder;

/**
 * Request builder for /users/{user-id}/calendarGroups/{calendarGroup-id}/calendars/{calendar-id}/events/{event-id}
 */
class EventRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get events from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Event
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Event
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
     * Deserialize response to Event
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
        return new Event($data);
    }
    /**
     * Update the navigation property events in users
     * @param Event $body Request body
     * @return Event
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Event $body): Event
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Event
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
        return new Event($data);
    }
    /**
     * Delete navigation property events for users
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
     * Navigate to attachments
     *
     * @return AttachmentsRequestBuilder
     */
    public function attachments(): AttachmentsRequestBuilder
    {
        return new AttachmentsRequestBuilder($this->client, $this->requestUrl . '/attachments');
    }
    /**
     * Navigate to calendar
     *
     * @return CalendarRequestBuilder
     */
    public function calendar(): CalendarRequestBuilder
    {
        return new CalendarRequestBuilder($this->client, $this->requestUrl . '/calendar');
    }
    /**
     * Navigate to extensions
     *
     * @return ExtensionsRequestBuilder
     */
    public function extensions(): ExtensionsRequestBuilder
    {
        return new ExtensionsRequestBuilder($this->client, $this->requestUrl . '/extensions');
    }
    /**
     * Navigate to instances
     *
     * @return InstancesRequestBuilder
     */
    public function instances(): InstancesRequestBuilder
    {
        return new InstancesRequestBuilder($this->client, $this->requestUrl . '/instances');
    }
    /**
     * Navigate to accept
     *
     * @return AcceptRequestBuilder
     */
    public function accept(): AcceptRequestBuilder
    {
        return new AcceptRequestBuilder($this->client, $this->requestUrl . '/accept');
    }
    /**
     * Navigate to cancel
     *
     * @return CancelRequestBuilder
     */
    public function cancel(): CancelRequestBuilder
    {
        return new CancelRequestBuilder($this->client, $this->requestUrl . '/cancel');
    }
    /**
     * Navigate to decline
     *
     * @return DeclineRequestBuilder
     */
    public function decline(): DeclineRequestBuilder
    {
        return new DeclineRequestBuilder($this->client, $this->requestUrl . '/decline');
    }
    /**
     * Navigate to dismissReminder
     *
     * @return DismissReminderRequestBuilder
     */
    public function dismissReminder(): DismissReminderRequestBuilder
    {
        return new DismissReminderRequestBuilder($this->client, $this->requestUrl . '/dismissReminder');
    }
    /**
     * Navigate to forward
     *
     * @return ForwardRequestBuilder
     */
    public function forward(): ForwardRequestBuilder
    {
        return new ForwardRequestBuilder($this->client, $this->requestUrl . '/forward');
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
    /**
     * Navigate to snoozeReminder
     *
     * @return SnoozeReminderRequestBuilder
     */
    public function snoozeReminder(): SnoozeReminderRequestBuilder
    {
        return new SnoozeReminderRequestBuilder($this->client, $this->requestUrl . '/snoozeReminder');
    }
    /**
     * Navigate to tentativelyAccept
     *
     * @return TentativelyAcceptRequestBuilder
     */
    public function tentativelyAccept(): TentativelyAcceptRequestBuilder
    {
        return new TentativelyAcceptRequestBuilder($this->client, $this->requestUrl . '/tentativelyAccept');
    }
}
