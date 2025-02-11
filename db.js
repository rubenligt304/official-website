<!doctype javascript> 

fetch('database.json')
  .then(response => response.json())
  .then(data => {
    const usersContainer = document.getElementById('users');
    const searchInput = document.getElementById('search');
    const addUserForm = document.getElementById('addUserForm');

    function displayUsers(users) {
      usersContainer.innerHTML = '';
      users.forEach(user => {
        const userElement = document.createElement('p');
        userElement.textContent = `${user.name} - ${user.email}`;
        usersContainer.appendChild(userElement);
      });
    }

    displayUsers(data.users);

    searchInput.addEventListener('input', () => {
      const filteredUsers = data.users.filter(user => 
        user.name.toLowerCase().includes(searchInput.value.toLowerCase())
      );
      displayUsers(filteredUsers);
    });

    addUserForm.addEventListener('submit', (event) => {
      event.preventDefault();
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      if (name && email) {
        const newUser = { id: data.users.length + 1, name, email };
        data.users.push(newUser);
        displayUsers(data.users);
      }
    });
  })
  .catch(error => console.error('Fout bij laden database:', error));
