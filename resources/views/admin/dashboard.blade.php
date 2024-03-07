@extends('incfile.header')
@include('incfile.sideBarAdm')


<div class=" w-full overflow-x-auto">
    <table class="w-full divide-y divide-gray-900  font-[sans-serif]">
      <thead class="bg-gray-900 w-full whitespace-nowrap">
        <tr>
          <th class="px-6 py-3 text-left text-xs text-white font-medium text-gray-500 uppercase tracking-wider">
            Name
          </th>
          <th class="px-6 py-3 text-left text-xs text-white font-medium text-gray-500 uppercase tracking-wider">
            Email
          </th>
          <th class="px-6 py-3 text-left text-xs text-white font-medium text-gray-500 uppercase tracking-wider">
            Phone
          </th>
          <th class="px-6 py-3 text-left text-xs text-white font-medium text-gray-500 uppercase tracking-wider">
            Role
          </th>
          <th class="px-6 py-3 text-left text-xs text-white font-medium text-gray-500 uppercase tracking-wider">
            Joined At
          </th>
          <th class="px-6 py-3 text-left text-xs text-white font-medium text-gray-500 uppercase tracking-wider">
            Actions
          </th>
        </tr>
      </thead>
      @foreach ($user as $users )
      <tbody class="bg-white divide-y divide-gray-900 whitespace-nowrap">
        <tr>
          <td class="px-6 py-4 text-sm text-[#333]">
            {{ $users->lname }} {{ $users->fname }}
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            {{ $users->email }}
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            {{ $users->phone }}
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            {{ $users->role }}
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            {{ $users->created_at }}
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            <button class="text-blue-500 hover:text-blue-700 mr-4">Edit</button>
            <button class="text-red-500 hover:text-red-700"><a href="{{ url('delete'. $user->id) }}">Delete</a></button>
          </td>
        </tr>
        
      </tbody>
      @endforeach
    </table>
  </div>
