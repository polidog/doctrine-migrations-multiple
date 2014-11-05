<?php
/**
 * Created by PhpStorm.
 * User: polidog
 * Date: 2014/11/05
 * Time: 22:43
 */
namespace Polidog\App\PostgresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Comment
 * @author polidogs@gmail.com
 *
 * @ORM\Entity()
 * @ORM\Table(name="comment")
 */
class Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     * @ORM\Column(name="post_id", type="integer", nullable=false)
     */
    private $postId;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     *
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="comment", type="text", nullable=false)
     */
    private $comment;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set postId
     *
     * @param integer $postId
     * @return Comment
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return integer 
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Comment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
}
