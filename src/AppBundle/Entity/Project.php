<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 */
class Project
{

    const TYPE_THEME      = 1;
    const TYPE_ACTIVITY   = 2;
    const TYPE_KEYWORD    = 3;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255, nullable=true)
     */
    private $theme;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="datetime", nullable=true)
     */
    private $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="projectDate", type="datetime", nullable=true)
     */
    private $projectDate;

    /**
     * @var string
     *
     * @ORM\Column(name="projectDuration", type="string", length=255, nullable=true)
     */
    private $projectDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="projectCost", type="string", length=255, nullable=true)
     */
    private $projectCost;

    /**
     * @var string
     *
     * @ORM\Column(name="projectCoFinance", type="string", length=255, nullable=true)
     */
    private $projectCoFinance;

    /**
     * @var string
     *
     * @ORM\Column(name="descResume", type="text", nullable=true)
     */
    private $descResume;

    /**
     * @var string
     *
     * @ORM\Column(name="descContext", type="text", nullable=true)
     */
    private $descContext;

    /**
     * @var string
     *
     * @ORM\Column(name="descGoal", type="text", nullable=true)
     */
    private $descGoal;

    /**
     * @var string
     *
     * @ORM\Column(name="descProgress", type="text", nullable=true)
     */
    private $descProgress;

    /**
     * @var string
     *
     * @ORM\Column(name="descPartners", type="text", nullable=true)
     */
    private $descPartners;

    /**
     * @var string
     *
     * @ORM\Column(name="descResults", type="text", nullable=true)
     */
    private $descResults;

    /**
     * @var string
     *
     * @ORM\Column(name="descDifficulties", type="text", nullable=true)
     */
    private $descDifficulties;

    /**
     * @var string
     *
     * @ORM\Column(name="descAdvices", type="text", nullable=true)
     */
    private $descAdvices;

    /**
     * @var string
     *
     * @ORM\Column(name="contactName", type="string", length=255, nullable=true)
     */
    private $contactName;

    /**
     * @var string
     *
     * @ORM\Column(name="contactOccupation", type="string", length=255, nullable=true)
     */
    private $contactOccupation;

    /**
     * @var string
     *
     * @ORM\Column(name="contactEmail", type="string", length=255, nullable=true)
     */
    private $contactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="contactPhone", type="string", length=255, nullable=true)
     */
    private $contactPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="youtube", type="string", length=255, nullable=true)
     */
    private $youtube;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="keyWords", type="string", length=255, nullable=true)
     */
    private $keyWords;

    /**
     * @ORM\ManyToOne(targetEntity="Mayor", inversedBy="projects")
     */
    private $mayor;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set title
     *
     * @param string $title
     *
     * @return Project
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set theme
     *
     * @param string $theme
     *
     * @return Project
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Project
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return Project
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Project
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return unserialize($this->image);
    }

    /**
     * Set projectDate
     *
     * @param \DateTime $projectDate
     *
     * @return Project
     */
    public function setProjectDate($projectDate)
    {
        $this->projectDate = $projectDate;

        return $this;
    }

    /**
     * Get projectDate
     *
     * @return \DateTime
     */
    public function getProjectDate()
    {
        return $this->projectDate;
    }

    /**
     * Set projectDuration
     *
     * @param string $projectDuration
     *
     * @return Project
     */
    public function setProjectDuration($projectDuration)
    {
        $this->projectDuration = $projectDuration;

        return $this;
    }

    /**
     * Get projectDuration
     *
     * @return string
     */
    public function getProjectDuration()
    {
        return $this->projectDuration;
    }

    /**
     * Set projectCost
     *
     * @param string $projectCost
     *
     * @return Project
     */
    public function setProjectCost($projectCost)
    {
        $this->projectCost = $projectCost;

        return $this;
    }

    /**
     * Get projectCost
     *
     * @return string
     */
    public function getProjectCost()
    {
        return $this->projectCost;
    }

    /**
     * Set projectCoFinance
     *
     * @param string $projectCoFinance
     *
     * @return Project
     */
    public function setProjectCoFinance($projectCoFinance)
    {
        $this->projectCoFinance = $projectCoFinance;

        return $this;
    }

    /**
     * Get projectCoFinance
     *
     * @return string
     */
    public function getProjectCoFinance()
    {
        return $this->projectCoFinance;
    }

    /**
     * Set descResume
     *
     * @param string $descResume
     *
     * @return Project
     */
    public function setDescResume($descResume)
    {
        $this->descResume = $descResume;

        return $this;
    }

    /**
     * Get descResume
     *
     * @return string
     */
    public function getDescResume()
    {
        return $this->descResume;
    }

    /**
     * Set descContext
     *
     * @param string $descContext
     *
     * @return Project
     */
    public function setDescContext($descContext)
    {
        $this->descContext = $descContext;

        return $this;
    }

    /**
     * Get descContext
     *
     * @return string
     */
    public function getDescContext()
    {
        return $this->descContext;
    }

    /**
     * Set descGoal
     *
     * @param string $descGoal
     *
     * @return Project
     */
    public function setDescGoal($descGoal)
    {
        $this->descGoal = $descGoal;

        return $this;
    }

    /**
     * Get descGoal
     *
     * @return string
     */
    public function getDescGoal()
    {
        return $this->descGoal;
    }

    /**
     * Set descProgress
     *
     * @param string $descProgress
     *
     * @return Project
     */
    public function setDescProgress($descProgress)
    {
        $this->descProgress = $descProgress;

        return $this;
    }

    /**
     * Get descProgress
     *
     * @return string
     */
    public function getDescProgress()
    {
        return $this->descProgress;
    }

    /**
     * Set descPartners
     *
     * @param string $descPartners
     *
     * @return Project
     */
    public function setDescPartners($descPartners)
    {
        $this->descPartners = $descPartners;

        return $this;
    }

    /**
     * Get descPartners
     *
     * @return string
     */
    public function getDescPartners()
    {
        return $this->descPartners;
    }

    /**
     * Set descResults
     *
     * @param string $descResults
     *
     * @return Project
     */
    public function setDescResults($descResults)
    {
        $this->descResults = $descResults;

        return $this;
    }

    /**
     * Get descResults
     *
     * @return string
     */
    public function getDescResults()
    {
        return $this->descResults;
    }

    /**
     * Set descDifficulties
     *
     * @param string $descDifficulties
     *
     * @return Project
     */
    public function setDescDifficulties($descDifficulties)
    {
        $this->descDifficulties = $descDifficulties;

        return $this;
    }

    /**
     * Get descDifficulties
     *
     * @return string
     */
    public function getDescDifficulties()
    {
        return $this->descDifficulties;
    }

    /**
     * Set descAdvices
     *
     * @param string $descAdvices
     *
     * @return Project
     */
    public function setDescAdvices($descAdvices)
    {
        $this->descAdvices = $descAdvices;

        return $this;
    }

    /**
     * Get descAdvices
     *
     * @return string
     */
    public function getDescAdvices()
    {
        return $this->descAdvices;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     *
     * @return Project
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactOccupation
     *
     * @param string $contactOccupation
     *
     * @return Project
     */
    public function setContactOccupation($contactOccupation)
    {
        $this->contactOccupation = $contactOccupation;

        return $this;
    }

    /**
     * Get contactOccupation
     *
     * @return string
     */
    public function getContactOccupation()
    {
        return $this->contactOccupation;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     *
     * @return Project
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set contactPhone
     *
     * @param string $contactPhone
     *
     * @return Project
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return Project
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Project
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     *
     * @return Project
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;

        return $this;
    }

    /**
     * Get youtube
     *
     * @return string
     */
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Project
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return Project
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set keyWords
     *
     * @param string $keyWords
     *
     * @return Project
     */
    public function setKeyWords($keyWords)
    {
        $this->keyWords = $keyWords;

        return $this;
    }

    /**
     * Get keyWords
     *
     * @return string
     */
    public function getKeyWords()
    {
        return $this->keyWords;
    }

    /**
     * Set mayor
     *
     * @param \AppBundle\Entity\Mayor $mayor
     *
     * @return Project
     */
    public function setMayor(\AppBundle\Entity\Mayor $mayor = null)
    {
        $this->mayor = $mayor;

        return $this;
    }

    /**
     * Get mayor
     *
     * @return \AppBundle\Entity\Mayor
     */
    public function getMayor()
    {
        return $this->mayor;
    }

    /**
     * Set favorites
     *
     * @param \AppBundle\Entity\Favorite $favorites
     *
     * @return Project
     */
    public function setFavorites(\AppBundle\Entity\Favorite $favorites = null)
    {
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * Get favorites
     *
     * @return \AppBundle\Entity\Favorite
     */
    public function getFavorites()
    {
        return $this->favorites;
    }

    /**
     * Set favoriteProject
     *
     * @param \AppBundle\Entity\Favorite $favoriteProject
     *
     * @return Project
     */
    public function setFavoriteProject(\AppBundle\Entity\Favorite $favoriteProject = null)
    {
        $this->favoriteProject = $favoriteProject;

        return $this;
    }

    /**
     * Get favoriteProject
     *
     * @return \AppBundle\Entity\Favorite
     */
    public function getFavoriteProject()
    {
        return $this->favoriteProject;
    }
}
