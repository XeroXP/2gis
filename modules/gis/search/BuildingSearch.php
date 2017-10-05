<?php

namespace app\modules\gis\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\gis\models\Building;

/**
 * BuildingSearch represents the model behind the search form of `app\modules\api\models\Building`.
 */
class BuildingSearch extends Building
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at'], 'integer'],
            [['address'], 'safe'],
            [['geo_lat', 'geo_lon'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Building::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'geo_lat' => $this->geo_lat,
            'geo_lon' => $this->geo_lon,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
