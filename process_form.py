# process_contact_form.py

import cgi
import smtplib

def send_email(name, email, message):
    # Configure email settings
    sender_email = 'your_email@example.com'
    receiver_email = 'recipient@example.com'
    smtp_server = 'smtp.example.com'
    smtp_port = 587
    smtp_username = 'your_smtp_username'
    smtp_password = 'your_smtp_password'

    # Construct email message
    subject = f'New Contact Form Submission from {name}'
    body = f'Name: {name}\nEmail: {email}\nMessage: {message}'
    message = f'Subject: {subject}\n\n{body}'

    # Send email
    with smtplib.SMTP(smtp_server, smtp_port) as server:
        server.starttls()
        server.login(smtp_username, smtp_password)
        server.sendmail(sender_email, receiver_email, message)

# Main function to handle form submission
def main():
    form = cgi.FieldStorage()

    name = form.getvalue('name')
    email = form.getvalue('email')
    message = form.getvalue('message')

    # Perform additional validation if needed

    # Send email notification
    send_email(name, email, message)

if __name__ == '__main__':
    main()
