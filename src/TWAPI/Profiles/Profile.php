<?php
/**
 * Created by PhpStorm.
 * User: Hertz
 * Date: 18.11.2018
 * Time: 16:26
 */

namespace TWAPI\Profiles;

use Type;

abstract class Profile
{
    public const TYPE_PERSONAL = 'personal';
    public const TYPE_BUSINESS = 'business';

    protected const FIELD_NAME_ID = 'id';
    protected const FIELD_NAME_TYPE = 'type';

    private $id;
    private $type;

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }


}