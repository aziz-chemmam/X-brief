@extends('incfile.header')
@include('incfile.sideBarAdm')


<div class=" w-full overflow-x-auto">
    <table class="w-11/12 ml-24 mt-36 divide-y divide-gray-900  font-[sans-serif]">
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
            <form action="/delete/{{ $users->id }}" method="post">
                @csrf
                @method('DELETE')
                <button class="text-red-500 hover:text-red-700">Delete</button>
            </form>
          </td>
        </tr>
        
      </tbody>
      @endforeach
    </table>
  </div>
