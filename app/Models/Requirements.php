<?php 
	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;


	class Requirements extends Model
	{
		protected $table = 'requirements';

		protected $primaryKey = 'requirement_id';

		protected $fillable = [
			'student_id',
			'req_desc'
		];

		public $timestamps = false;

		public function student(){
			return $this->hasOne('App\Models\Students', 'requirement_id', 'student_id');
		}
	}
?>