Question2Answer History
=======================

Description
-----------
This is a plugin for **Question2Answer** that adds an activity/points history to the user profile. It was created by NoahY as a fork of a similar plugin by Scott Vivian.

Features
--------
- shows almost all events in list
- shows incoming events (e.g. user's question voted on)
- shows points gained and lost for each event if applicable.
- option to replace old activity list
- set max age of events to show in admin/plugins
- set event exceptions to hide from event user, and those to show to public via admin/plugins
- CSS configurable, all strings configurable via admin/plugins

Installation
------------
1. Install [Question2Answer][1]
2. Get the source code for this plugin from [Github][2], either using [git][3], or downloading directly:

   - To download using git, install git and then type

         git clone git@github.com/awiechers/q2a-history.git history

     at the command prompt (on Linux, Windows is a bit different)
   - To download directly, go to the [project page][4] and click **Download**.

3. Extract the files to a subfolder such as `history` inside the `qa-plugins` folder of your Q2A installation.
4. Navigate to your site, log in as an admin, then go to *Admin&nbsp;&rarr; Plugins*.
5. First, set up the event logger plugin to *Log events to qa_eventlog database table*.
6. Then, go to *History*, select *options*, then click **Save Changes**.

About Q2A
---------
Question2Answer is a free and open source platform for Q&A sites. For more information, visit:

http://www.question2answer.org/

[1]: https://www.question2answer.org/install.php
[2]: https://github.com/
[3]: https://git-scm.com/
[4]: https://github.com/ansgarwiechers/q2a-history
