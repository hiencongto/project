<?php
namespace App\Repositories\Repository;

use App\Models\Chapter;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface\ChapterRepositoryInterface;

class ChapterRepository extends BaseRepository implements ChapterRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Chapter::class;
    }

    public function logicCreate($data = [])
    {
        // TODO: Implement logicCreate() method.
    }

    public function findChapterByStoryIdAndChapter($story_id, $chapter)
    {
        return $this->model->where('story_id', $story_id)->where('chapter', $chapter);
    }

    public function listChapterByStoryId($story_id)
    {
        return $this->model->where('story_id', $story_id)->get();
    }

    public function deleteByStoryIdAndChapter($story_id, $chapter)
    {
        return $this->model->where('story_id', $story_id)->where('chapter', $chapter)->delete();
    }
}
