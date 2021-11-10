<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Options\LessonsAchievementAttributes;
use App\Options\CommentAchievementAttributes;
use App\Models\User;
use App\Models\UserAchievements;

class UserAchievementsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserAchievements::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = CommentAchievementAttributes::ACHIEVEMENT_TYPE; 
        $name = $this->faker->randomElement(CommentAchievementAttributes::$title);

        return [
            'user_id' => User::factory(),
            'achievement_type' => $type,
            'achievement_name' => $name,
        ];
    }

     /**
     * Indicate the achievement type user achievement falls under.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function type(string $type = null)
    {
        return $this->state(function () use ($type) {

            switch ($type) {
                case 'Comment':
                    $type = CommentAchievementAttributes::ACHIEVEMENT_TYPE; 
                    $name = $this->faker->randomElement(CommentAchievementAttributes::$title);
                    break;
                case 'lesson':
                    $type = LessonsAchievementAttributes::ACHIEVEMENT_TYPE; 
                    $name = $this->faker->randomElement(LessonsAchievementAttributes::$title);
                    break;
                default:
                    $type = CommentAchievementAttributes::ACHIEVEMENT_TYPE; 
                    $name = $this->faker->randomElement(CommentAchievementAttributes::$title);
            }

            return [
                'achievement_type' => $type,
                'achievement_name' => $name,
            ];
        });
    }
}
