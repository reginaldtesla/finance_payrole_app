<x-layout>
    <section class="employee-management">
        <header class="em-header" style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Employee List</h2>
            <div class="controls" style="display: flex; gap: 10px; align-items: center;">
                <form action="/employees" method="GET" style="display: flex; gap: 10px; margin: 0;">
                    <input type="text" name="search" placeholder="Search Name" value="{{ request('search') }}" style="padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                    <select name="type" onchange="this.form.submit()" style="padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="All">All Types</option>
                        <option value="Permanent" {{ request('type') == 'Permanent' ? 'selected' : '' }}>Permanent</option>
                        <option value="Temporal" {{ request('type') == 'Temporal' ? 'selected' : '' }}>Temporal</option>
                    </select>
                </form>
                <button onclick="openAddModal()" class="add-btn" style="background-color: #4CAF50; color: white; padding: 0.5rem 1rem; text-decoration: none; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem;">
                    <i class="fa-solid fa-plus"></i> Add New Employee
                </button>
            </div>
        </header>

        <div style="background: white; padding: 1rem; border-radius: 8px; margin-top: 1rem; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #f8f9fa; text-align: left;">
                        @if ($errors->any())
                            <tr style="background-color: #fee;">
                                <td colspan="6" style="padding: 1rem; color: red;">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        @endif
                        <th style="padding: 1rem; border-bottom: 2px solid #dee2e6;">Employee ID</th>
                        <th style="padding: 1rem; border-bottom: 2px solid #dee2e6;">Name</th>
                        <th style="padding: 1rem; border-bottom: 2px solid #dee2e6;">Job Title</th>
                        <th style="padding: 1rem; border-bottom: 2px solid #dee2e6;">Department</th>
                        <th style="padding: 1rem; border-bottom: 2px solid #dee2e6;">Type</th>
                        <th style="padding: 1rem; border-bottom: 2px solid #dee2e6;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($employees as $employee)
                        <tr>
                            <td style="padding: 1rem; border-bottom: 1px solid #dee2e6;">
                                {{ $employee->employee_id }}
                            </td>
                            <td style="padding: 1rem; border-bottom: 1px solid #dee2e6;">
                                {{ $employee->user->name }} <br>
                                <small style="color: #666;">{{ $employee->user->email }}</small>
                            </td>
                            <td style="padding: 1rem; border-bottom: 1px solid #dee2e6;">
                                {{ $employee->job_title }}
                            </td>
                            <td style="padding: 1rem; border-bottom: 1px solid #dee2e6;">
                                {{ $employee->department }}
                            </td>
                            <td style="padding: 1rem; border-bottom: 1px solid #dee2e6;">
                                <span style="padding: 0.25rem 0.5rem; border-radius: 4px; background-color: {{ $employee->staff_type === 'Permanent' ? '#e8f5e9' : '#fff3e0' }}; color: {{ $employee->staff_type === 'Permanent' ? '#2e7d32' : '#ef6c00' }};">
                                    {{ $employee->staff_type }}
                                </span>
                            </td>
                            <td style="padding: 1rem; border-bottom: 1px solid #dee2e6;">
                                <button
                                    onclick="openEditModal(this)"
                                    data-id="{{ $employee->id }}"
                                    data-name="{{ $employee->user->name }}"
                                    data-email="{{ $employee->user->email }}"
                                    data-job="{{ $employee->job_title }}"
                                    data-dept="{{ $employee->department }}"
                                    data-type="{{ $employee->staff_type }}"
                                    style="border: none; background: none; cursor: pointer; color: #2196F3; font-weight: 500; margin-right: 10px;"
                                >
                                    Edit
                                </button>
                                <form action="/employees/{{ $employee->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="border: none; background: none; cursor: pointer; color: #dc3545; font-weight: 500;" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="padding: 2rem; text-align: center; color: #666;">No employees found. Click "Add New Employee" to get started.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div style="margin-top: 1rem;">
                {{ $employees->withQueryString()->links() }}
            </div>
        </div>
    </section>

    <!-- Add Employee Modal -->
    <div id="addModal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.5); align-items: center; justify-content: center;">
        <div style="background: white; padding: 2rem; border-radius: 8px; width: 100%; max-width: 500px; position: relative; margin: 2rem auto;">
            <span onclick="closeAddModal()" style="position: absolute; right: 20px; top: 15px; font-size: 24px; cursor: pointer; color: #666;">&times;</span>
            <h2 style="margin-bottom: 1.5rem;">Add New Employee</h2>

            <form action="/add_employee" method="POST">
                @csrf
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Full Name</label>
                    <input type="text" name="name" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Email (Login ID)</label>
                    <input type="email" name="email" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Password</label>
                    <input type="password" name="password" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Job Title</label>
                    <input type="text" name="job_title" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Department</label>
                    <input type="text" name="department" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Staff Type</label>
                    <select name="staff_type" style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="Permanent">Permanent</option>
                        <option value="Temporal">Temporal</option>
                    </select>
                </div>
                <button type="submit" style="background-color: #4CAF50; color: white; padding: 0.75rem 1.5rem; border: none; border-radius: 4px; cursor: pointer; width: 100%;">Create Employee</button>
            </form>
        </div>
    </div>

    <!-- Edit Employee Modal -->
    <div id="editModal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.5); align-items: center; justify-content: center;">
        <div style="background: white; padding: 2rem; border-radius: 8px; width: 100%; max-width: 500px; position: relative; margin: 2rem auto;">
            <span onclick="closeEditModal()" style="position: absolute; right: 20px; top: 15px; font-size: 24px; cursor: pointer; color: #666;">&times;</span>
            <h2 style="margin-bottom: 1.5rem;">Edit Employee</h2>

            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Full Name</label>
                    <input type="text" name="name" id="edit_name" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Email (Login ID)</label>
                    <input type="email" name="email" id="edit_email" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Password <small>(Leave blank to keep)</small></label>
                    <input type="password" name="password" style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Job Title</label>
                    <input type="text" name="job_title" id="edit_job_title" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Department</label>
                    <input type="text" name="department" id="edit_department" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Staff Type</label>
                    <select name="staff_type" id="edit_staff_type" style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="Permanent">Permanent</option>
                        <option value="Temporal">Temporal</option>
                    </select>
                </div>
                <button type="submit" style="background-color: #2196F3; color: white; padding: 0.75rem 1.5rem; border: none; border-radius: 4px; cursor: pointer; width: 100%;">Update Employee</button>
            </form>
        </div>
    </div>

    <script>
        function openAddModal() {
            document.getElementById('addModal').style.display = 'flex';
        }

        function closeAddModal() {
            document.getElementById('addModal').style.display = 'none';
        }

        function openEditModal(button) {
            // Populate form fields
            document.getElementById('editForm').action = '/employees/' + button.getAttribute('data-id');
            document.getElementById('edit_name').value = button.getAttribute('data-name');
            document.getElementById('edit_email').value = button.getAttribute('data-email');
            document.getElementById('edit_job_title').value = button.getAttribute('data-job');
            document.getElementById('edit_department').value = button.getAttribute('data-dept');
            document.getElementById('edit_staff_type').value = button.getAttribute('data-type');

            document.getElementById('editModal').style.display = 'flex';
        }

        function closeEditModal() {
            document.getElementById('editModal').style.display = 'none';
        }

        // Close modal if clicking outside
        window.onclick = function(event) {
            if (event.target == document.getElementById('addModal')) {
                closeAddModal();
            }
            if (event.target == document.getElementById('editModal')) {
                closeEditModal();
            }
        }
    </script>
</x-layout>
