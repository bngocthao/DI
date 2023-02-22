<?
use App\Models\NguoiDung;
use App\Models\VaiTro_NguoiDung;
use App\Repository\NguoiDungRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NguoiDungServices {

    public function getUserIndexData(){
        $id = Auth::id();
        $user = NguoiDung::find($id);
        $users = NguoiDung::all();
        $context = [
            'users' => $users,
            'user' => $user,
        ];
        return $context;
    }

}