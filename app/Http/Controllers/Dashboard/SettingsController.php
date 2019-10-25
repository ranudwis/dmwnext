<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Settings\EditSettingRequest;
use App\Setting;

class SettingsController extends DashboardController
{
    protected $active = 'settings';

    public function index()
    {
        $this->page('Pengaturan', 'dashboard.settings');

        $settings = Setting::all();

        return view('dashboard.settings.index', compact('settings'));
    }

    public function edit($name)
    {
        $setting = Setting::where('name', $name)->firstOrFail();

        $this->page('Pengaturan: ' . $setting->label, 'dashboard.settings.edit');

        $this->breadcrumb_parameter = [$setting];

        return view('dashboard.settings.edit', compact('setting'));
    }

    public function update(EditSettingRequest $request, $name)
    {
        $setting = Setting::where('name', $name)->firstOrFail();

        $setting->value = $request->value;
        $setting->save();

        return redirect()->route('dashboard.settings');
    }
}
