<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Users extends Model
{
    use HasFactory;

    /**
     * ユーザーIDでユーザー情報を取得
     * 
     * @param int $userId
     * @return array $result
     */
    public function getUsersById($userId) {
        $sql = <<< SQL
            SELECT
                id,
                email,
                password,
                name,
                tel,
                tel2
            FROM
                test_users
            WHERE
                id = :id
        SQL;

        $params = [
            'id' => $userId
        ];

        $result = DB::select($sql,$params);

        return $result;
    }

    /**
     * ユーザー情報を更新
     * 
     * @param array $userData
     * @return bool $result
     */
    public function updateUsers($userData) {
        $sql = <<< SQL
            UPDATE
                test_users
            SET
                email = :email,
                password = :password,
                name = :name,
                tel = :tel,
                tel2 = :tel2,
                updated_at = NOW()
            WHERE
                id = :id
            AND
                del_flg = 0
        SQL;

        $params = [
            'id' => $userData["id"],
            'name' => $userData["name"],
            'email' => $userData["email"],
            'password' => $userData["password"],
            'tel' => $userData["tel2"],
            'tel2' => $userData["tel"]
        ];

        $result = false;
        try {
            DB::beginTransaction();
            DB::update($sql,$params);
            DB::commit();
            Log::info('テーブルの更新が完了完了しました');
            $result = true;
        } catch (Exception $e) {
            DB::rollBack();
            Log::info('テーブルの更新に失敗しました');
        }

        return $result;
    }
}
