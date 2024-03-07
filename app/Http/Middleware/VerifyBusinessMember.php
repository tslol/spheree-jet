<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\BusinessUser;

class VerifyBusinessMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $businessId = $request->route('id');

        if (!$businessId) {
            // If the business ID is not provided, you might want to handle this case differently
            return redirect('/'); // Redirect to a default page or show an error
        }

        $user = auth()->user();
        $isMember = BusinessUser::where('business_id', $businessId)
            ->where('user_id', $user->id)
            ->first();

        if (!$isMember) {
            // If the user is not a member, redirect them or show an error
            return redirect('/')->with('error', 'You are not a member of this business.');
        }


        return $next($request);
    }
}
