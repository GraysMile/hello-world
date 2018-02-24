<?php
namespace App\model;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class User
{
    /** @ODM\Id */
    private $id;
    /** @ODM\Field(type="string") */
    private $name;
    /**
     * @var
     * @ODM\Field(type="string")
     */
    private $email;
    /** @ODM\ReferenceMany(targetDocument="BlogPost", cascade="all") */
    private $posts=array();
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param mixed $posts
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;
    }
    public function addPost($post)
    {
        $this->posts[]=$post;
    }
}