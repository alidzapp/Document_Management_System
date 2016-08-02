<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


/**
 * The "moments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_PlusMomentsService(...);
 *   $moments = $plusService->moments;
 *  </code>
 */
class Google_MomentsServiceResource extends Google_ServiceResource
{


    /**
     * Record a user activity (e.g Bill watched a video on Youtube) (moments.insert)
     *
     * @param string $userId The ID of the user to get activities for. The special value "me" can be used to indicate the authenticated user.
     * @param string $collection The collection to which to write moments.
     * @param Google_Moment $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool debug Return the moment as written. Should be used only for debugging.
     * @return Google_Moment
     */
    public function insert($userId, $collection, Google_Moment $postBody, $optParams = array())
    {
        $params = array('userId' => $userId, 'collection' => $collection, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', array($params));
        if ($this->useObjects()) {
            return new Google_Moment($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Plus (v1moments).
 *
 * <p>
 * The Google+ API enables developers to build on top of the Google+ platform.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/+/history/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_PlusMomentsService extends Google_Service
{
    public $moments;

    /**
     * Constructs the internal representation of the Plus service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'plus/v1moments/people/';
        $this->version = 'v1moments';
        $this->serviceName = 'plus';

        $client->addService($this->serviceName, $this->version);
        $this->moments = new Google_MomentsServiceResource($this, $this->serviceName, 'moments',
            json_decode('{"methods": {"insert": {"parameters": {"debug": {"type": "boolean", "location": "query"}, "userId": {"required": true, "type": "string", "location": "path"}, "collection": {"required": true, "type": "string", "location": "path", "enum": ["vault"]}}, "request": {"$ref": "Moment"}, "response": {"$ref": "Moment"}, "httpMethod": "POST", "path": "{userId}/moments/{collection}", "id": "plus.moments.insert"}}}', true));

    }
}

class Google_ItemScope extends Google_Model
{
    public $startDate;
    public $endDate;
    public $text;
    public $image;
    public $address;
    public $birthDate;
    public $datePublished;
    public $addressLocality;
    public $duration;
    public $additionalName;
    public $worstRating;
    public $contributor;
    public $thumbnailUrl;
    public $id;
    public $postOfficeBoxNumber;
    public $attendees;
    public $author;
    public $associated_media;
    public $bestRating;
    public $addressCountry;
    public $width;
    public $streetAddress;
    public $location;
    public $latitude;
    public $byArtist;
    public $type;
    public $dateModified;
    public $contentSize;
    public $contentUrl;
    public $partOfTVSeries;
    public $description;
    public $familyName;
    public $kind;
    public $dateCreated;
    public $postalCode;
    public $attendeeCount;
    public $inAlbum;
    public $addressRegion;
    public $height;
    public $geo;
    public $embedUrl;
    public $tickerSymbol;
    public $playerType;
    public $about;
    public $givenName;
    public $name;
    public $performers;
    public $url;
    public $gender;
    public $longitude;
    public $thumbnail;
    public $caption;
    public $ratingValue;
    public $reviewRating;
    public $audio;
    protected $__addressType = 'Google_ItemScope';
    protected $__addressDataType = '';
    protected $__contributorType = 'Google_ItemScope';
    protected $__contributorDataType = 'array';
    protected $__attendeesType = 'Google_ItemScope';
    protected $__attendeesDataType = 'array';
    protected $__authorType = 'Google_ItemScope';
    protected $__authorDataType = 'array';
    protected $__associated_mediaType = 'Google_ItemScope';
    protected $__associated_mediaDataType = 'array';
    protected $__locationType = 'Google_ItemScope';
    protected $__locationDataType = '';
    protected $__byArtistType = 'Google_ItemScope';
    protected $__byArtistDataType = '';
    protected $__partOfTVSeriesType = 'Google_ItemScope';
    protected $__partOfTVSeriesDataType = '';
    protected $__inAlbumType = 'Google_ItemScope';
    protected $__inAlbumDataType = '';
    protected $__geoType = 'Google_ItemScope';
    protected $__geoDataType = '';
    protected $__aboutType = 'Google_ItemScope';
    protected $__aboutDataType = '';
    protected $__performersType = 'Google_ItemScope';
    protected $__performersDataType = 'array';
    protected $__thumbnailType = 'Google_ItemScope';
    protected $__thumbnailDataType = '';
    protected $__reviewRatingType = 'Google_ItemScope';
    protected $__reviewRatingDataType = '';
    protected $__audioType = 'Google_ItemScope';
    protected $__audioDataType = '';

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress(Google_ItemScope $address)
    {
        $this->address = $address;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function getDatePublished()
    {
        return $this->datePublished;
    }

    public function setDatePublished($datePublished)
    {
        $this->datePublished = $datePublished;
    }

    public function getAddressLocality()
    {
        return $this->addressLocality;
    }

    public function setAddressLocality($addressLocality)
    {
        $this->addressLocality = $addressLocality;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getAdditionalName()
    {
        return $this->additionalName;
    }

    public function setAdditionalName(/* array(Google_string) */
        $additionalName)
    {
        $this->assertIsArray($additionalName, 'Google_string', __METHOD__);
        $this->additionalName = $additionalName;
    }

    public function getWorstRating()
    {
        return $this->worstRating;
    }

    public function setWorstRating($worstRating)
    {
        $this->worstRating = $worstRating;
    }

    public function getContributor()
    {
        return $this->contributor;
    }

    public function setContributor(/* array(Google_ItemScope) */
        $contributor)
    {
        $this->assertIsArray($contributor, 'Google_ItemScope', __METHOD__);
        $this->contributor = $contributor;
    }

    public function getThumbnailUrl()
    {
        return $this->thumbnailUrl;
    }

    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->thumbnailUrl = $thumbnailUrl;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPostOfficeBoxNumber()
    {
        return $this->postOfficeBoxNumber;
    }

    public function setPostOfficeBoxNumber($postOfficeBoxNumber)
    {
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
    }

    public function getAttendees()
    {
        return $this->attendees;
    }

    public function setAttendees(/* array(Google_ItemScope) */
        $attendees)
    {
        $this->assertIsArray($attendees, 'Google_ItemScope', __METHOD__);
        $this->attendees = $attendees;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor(/* array(Google_ItemScope) */
        $author)
    {
        $this->assertIsArray($author, 'Google_ItemScope', __METHOD__);
        $this->author = $author;
    }

    public function getAssociated_media()
    {
        return $this->associated_media;
    }

    public function setAssociated_media(/* array(Google_ItemScope) */
        $associated_media)
    {
        $this->assertIsArray($associated_media, 'Google_ItemScope', __METHOD__);
        $this->associated_media = $associated_media;
    }

    public function getBestRating()
    {
        return $this->bestRating;
    }

    public function setBestRating($bestRating)
    {
        $this->bestRating = $bestRating;
    }

    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation(Google_ItemScope $location)
    {
        $this->location = $location;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getByArtist()
    {
        return $this->byArtist;
    }

    public function setByArtist(Google_ItemScope $byArtist)
    {
        $this->byArtist = $byArtist;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getDateModified()
    {
        return $this->dateModified;
    }

    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;
    }

    public function getContentSize()
    {
        return $this->contentSize;
    }

    public function setContentSize($contentSize)
    {
        $this->contentSize = $contentSize;
    }

    public function getContentUrl()
    {
        return $this->contentUrl;
    }

    public function setContentUrl($contentUrl)
    {
        $this->contentUrl = $contentUrl;
    }

    public function getPartOfTVSeries()
    {
        return $this->partOfTVSeries;
    }

    public function setPartOfTVSeries(Google_ItemScope $partOfTVSeries)
    {
        $this->partOfTVSeries = $partOfTVSeries;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getAttendeeCount()
    {
        return $this->attendeeCount;
    }

    public function setAttendeeCount($attendeeCount)
    {
        $this->attendeeCount = $attendeeCount;
    }

    public function getInAlbum()
    {
        return $this->inAlbum;
    }

    public function setInAlbum(Google_ItemScope $inAlbum)
    {
        $this->inAlbum = $inAlbum;
    }

    public function getAddressRegion()
    {
        return $this->addressRegion;
    }

    public function setAddressRegion($addressRegion)
    {
        $this->addressRegion = $addressRegion;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getGeo()
    {
        return $this->geo;
    }

    public function setGeo(Google_ItemScope $geo)
    {
        $this->geo = $geo;
    }

    public function getEmbedUrl()
    {
        return $this->embedUrl;
    }

    public function setEmbedUrl($embedUrl)
    {
        $this->embedUrl = $embedUrl;
    }

    public function getTickerSymbol()
    {
        return $this->tickerSymbol;
    }

    public function setTickerSymbol($tickerSymbol)
    {
        $this->tickerSymbol = $tickerSymbol;
    }

    public function getPlayerType()
    {
        return $this->playerType;
    }

    public function setPlayerType($playerType)
    {
        $this->playerType = $playerType;
    }

    public function getAbout()
    {
        return $this->about;
    }

    public function setAbout(Google_ItemScope $about)
    {
        $this->about = $about;
    }

    public function getGivenName()
    {
        return $this->givenName;
    }

    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPerformers()
    {
        return $this->performers;
    }

    public function setPerformers(/* array(Google_ItemScope) */
        $performers)
    {
        $this->assertIsArray($performers, 'Google_ItemScope', __METHOD__);
        $this->performers = $performers;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function setThumbnail(Google_ItemScope $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    public function getCaption()
    {
        return $this->caption;
    }

    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    public function setRatingValue($ratingValue)
    {
        $this->ratingValue = $ratingValue;
    }

    public function getReviewRating()
    {
        return $this->reviewRating;
    }

    public function setReviewRating(Google_ItemScope $reviewRating)
    {
        $this->reviewRating = $reviewRating;
    }

    public function getAudio()
    {
        return $this->audio;
    }

    public function setAudio(Google_ItemScope $audio)
    {
        $this->audio = $audio;
    }
}

class Google_Moment extends Google_Model
{
    public $startDate;
    public $kind;
    public $target;
    public $verb;
    public $result;
    public $type;
    protected $__targetType = 'Google_ItemScope';
    protected $__targetDataType = '';
    protected $__verbType = 'Google_MomentVerb';
    protected $__verbDataType = '';
    protected $__resultType = 'Google_ItemScope';
    protected $__resultDataType = '';

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getTarget()
    {
        return $this->target;
    }

    public function setTarget(Google_ItemScope $target)
    {
        $this->target = $target;
    }

    public function getVerb()
    {
        return $this->verb;
    }

    public function setVerb(Google_MomentVerb $verb)
    {
        $this->verb = $verb;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setResult(Google_ItemScope $result)
    {
        $this->result = $result;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

class Google_MomentVerb extends Google_Model
{
    public $url;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }
}
